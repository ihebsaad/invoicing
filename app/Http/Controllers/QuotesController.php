<?php

namespace App\Http\Controllers;

use App\Models\Quote;
use App\Models\Invoice;
use App\Models\Customer;
use App\Models\Product;
use App\Models\Item;
use App\Models\User;
use App\Models\Modele;
use App\Models\Article;
use App\Models\Door;
use App\Models\Porte;
use App\Models\Shutter;
use App\Models\Volet;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Barryvdh\DomPDF\Facade\Pdf;
use App\Http\Controllers\CustomersController;
use Yajra\DataTables\DataTables;

class QuotesController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (auth()->user()->user_type != 'admin')
            $quotes = Quote::where('par', auth()->user()->id)->orderBy('id', 'desc')->limit(100)->get();
        else
            $quotes = Quote::orderBy('id', 'desc')->limit(100)->get();

        return view('quotes.index', compact('quotes'));
    }


    public function all()
    {
        if (auth()->user()->user_type != 'admin')
            $quotes = Quote::where('par', auth()->user()->id)->orderBy('id', 'desc')->get();
        else
            $quotes = Quote::orderBy('id', 'desc')->get();

        return view('quotes.index', compact('quotes'));
    }

    public function liste()
    {
        /*
        if (auth()->user()->user_type != 'admin')
            $quotes = Quote::where('par',auth()->user()->id)->orderBy('id','desc')->get();
        else
        $quotes = Quote::orderBy('id','desc')->get();
    */
        return view('quotes.list');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $customers = Customer::all();
        $countries = CustomersController::countries();
        $commercials = User::where('user_type', '<>', 'admin')->get();
        $customer_id = 0;
        return view('quotes.create', compact('customers', 'countries', 'customer_id', 'commercials'));
    }


    public function add($customer_id)
    {
        $customers = Customer::all();
        $countries = CustomersController::countries();
        $commercials = User::where('user_type', '<>', 'admin')->get();

        return view('quotes.create', compact('customers', 'countries', 'customer_id', 'commercials'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'customer' => 'required',
        ]);

        $data = $request->all();
        $data['date'] = str_replace('/', '-', $data['date']);
        $data['date'] = Carbon::parse($data['date'])->format('Y-m-d');
        $name = strtoupper(User::find($data['par'])->name);
        $lastname = strtoupper(User::find($data['par'])->lastname);
        $num = Quote::where('par', $data['par'])->where('created_at', 'like',  date('Y-m-d') . '%')->count() + 1;
        $reference = date('Ymd') . $name[0] . $lastname[0] . sprintf('%03d', $num);
        $data['reference'] = $reference;
        $quote = Quote::create($data);
        if ($quote->menuiserie > 0)
            return redirect()->route('quotes.edit_men', ['id' => $quote->id])->with('success', 'Devis créé avec succès.');
        else
            return redirect()->route('quotes.edit', ['quote' => $quote])->with('success', 'Devis créé avec succès.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Quote  $quote
     * @return \Illuminate\Http\Response
     */
    public function show(Quote $quote)
    {
        return view('quotes.show', compact('quote'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Quote  $quote
     * @return \Illuminate\Http\Response
     */
    public function edit(Quote $quote)
    {
        $customers = Customer::all();
        if (auth()->user()->user_type == 'admin')
            $products = Product::all();
        elseif (auth()->user()->user_type == 'user')
            $products = Product::where('affichage', 1)->orWhere('affichage', 2)->get();
        elseif (auth()->user()->user_type == 'telepro')
            $products = Product::where('affichage', 1)->orWhere('affichage', 3)->get();


        $items = Item::where('quote', $quote->id)->get();
        $countries = CustomersController::countries();
        return view('quotes.edit', compact('quote', 'customers', 'products', 'items', 'countries'));
    }

    public function edit_men($id)
    {
        $quote = Quote::find($id);
        $customers = Customer::all();
        $modeles = Modele::all();
        $doors = Door::all();
        $shutters = Shutter::all();
        $articles = Article::where('quote', $quote->id)->get();
        $portes = Porte::where('quote', $quote->id)->get();
        $volets = Volet::where('quote', $quote->id)->get();
        $countries = CustomersController::countries();
        $items = Item::where('quote', $quote->id)->get();

        return view('quotes.edit_men', compact('quote', 'customers', 'articles', 'modeles', 'countries', 'doors', 'portes', 'volets', 'shutters', 'items'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Quote  $quote
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Quote $quote)
    {
        $data = $request->all();

        if (isset($data['date'])) {
            $data['date'] = str_replace('/', '-', $data['date']);
            $data['date'] = Carbon::parse($data['date'])->format('Y-m-d');
        }

        $quote->update($data);
        if ($quote->menuiserie > 0)
            return redirect()->route('quotes.edit_men', ['id' => $quote->id])->with('success', 'Devis modifié');
        else
            return redirect()->route('quotes.edit', ['quote' => $quote])->with('success', 'Devis modifié');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Quote  $quote
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, Quote $quote)
    {
        $quote->delete();
        return back()->with('success', 'Devis supprimé');
    }



    public function update_totals(Request $request)
    {
        $total_ht = $request->get('total_ht');
        $total_tva = $request->get('total_tva');
        $total_ttc = $request->get('total_ttc');
        $total_remise = $request->get('total_remise');
        $remise = $request->get('remise');
        $deplacement = $request->get('deplacement');
        $total_deplacement = $request->get('total_deplacement');
        $tva_deplacement = $request->get('tva_deplacement');
        $quote = $request->get('quote');
        $aide = $request->get('aide');
        $aide_renov = $request->get('aide_renov');
        $aide_cee = $request->get('aide_cee');
        $net = $request->get('net');
        $acompte = $request->get('acompte');
        $tva_remise = $request->get('tva_remise');
        $loi = $request->get('loi');
        $total_loi = $request->get('total_loi');
        $surface = $request->get('surface');

        Quote::where('id', $quote)->update(
            [
                'total_ht' => $total_ht,
                'total_tva' => $total_tva,
                'remise' => $remise,
                'total_ttc' => $total_ttc,
                'total_remise' => $total_remise,
                'total_deplacement' => $total_deplacement,
                'tva_deplacement' => $tva_deplacement,
                'deplacement' => $deplacement,
                'surface_produits' => $surface,
                'aide' => $aide,
                'aide_renov' => $aide_renov,
                'aide_cee' => $aide_cee,
                'net' => $net,
                'acompte' => $acompte,
                'tva_remise' => $tva_remise,
                'loi' => $loi,
                'total_loi' => $total_loi,
            ]
        );
    }


    public function show_pdf($id)
    {
        $invoice = Quote::find($id);
        $type = 'Devis';
        $reference = $invoice->reference;
        $user = User::find($invoice->par);
        if (isset($user))
            $par = $user->name . ' ' . $user->lastname;
        else
            $par = '';

        $date = Carbon::parse($invoice->created_at)->format('Y-m');
        $date_facture = Carbon::parse($invoice->date)->format('d/m/Y');
        $format = 'sanssignature';
        $items = Item::where('quote', $id)->get();
        $articles = Article::where('quote', $id)->get();
        $portes = Porte::where('quote', $id)->get();
        $volets = Volet::where('quote', $id)->get();

        $count = count($items);

        if ($invoice->menuiserie > 0)
            $pdf = PDF::loadView('invoices.invoice_men', compact('invoice', 'type', 'reference', 'date_facture', 'articles', 'par', 'count', 'portes', 'volets', 'items', 'format'));
        else
            $pdf = PDF::loadView('invoices.invoice', compact('invoice', 'type', 'reference', 'date_facture', 'items', 'par', 'count', 'portes', 'volets', 'items', 'format'));

        return $pdf->stream('quote-' . $id . '.pdf');
    }


    public function show_pdf_tva($id)
    {
        $invoice = Quote::find($id);
        $type = 'Devis';
        $reference = $invoice->reference;
        $user = User::find($invoice->par);
        if (isset($user))
            $par = $user->name . ' ' . $user->lastname;
        else
            $par = '';

        $date = Carbon::parse($invoice->created_at)->format('Y-m');
        $date_facture = Carbon::parse($invoice->date)->format('d/m/Y');
        $format = 'sanssignature';
        $items = Item::where('quote', $id)->get();
        $articles = Article::where('quote', $id)->get();
        $portes = Porte::where('quote', $id)->get();
        $volets = Volet::where('quote', $id)->get();

        $count = count($items);

        $pdf = PDF::loadView('invoices.invoice_tva', compact('invoice', 'type', 'reference', 'date_facture', 'items', 'par', 'count', 'portes', 'volets', 'items', 'format'));

        return $pdf->stream('quote-' . $id . '.pdf');
    }

    public function download_pdf($id)
    {
        $invoice = Quote::find($id);
        $type = 'Devis';
        $reference = $invoice->reference;
        $user = User::find($invoice->par);
        if (isset($user))
            $par = $user->name . ' ' . $user->lastname;
        else
            $par = '';

        $date = Carbon::parse($invoice->created_at)->format('Y-m');
        $date_facture = Carbon::parse($invoice->date)->format('d/m/Y');
        $format = 'sanssignature';
        $items = Item::where('quote', $id)->get();
        $articles = Article::where('quote', $id)->get();
        $portes = Porte::where('quote', $id)->get();
        $volets = Volet::where('quote', $id)->get();

        $count = count($items);

        if ($invoice->menuiserie > 0)
            $pdf = PDF::loadView('invoices.invoice_men', compact('invoice', 'type', 'reference', 'date_facture', 'articles', 'par', 'count', 'portes', 'volets', 'items', 'format'));
        else
            $pdf = PDF::loadView('invoices.invoice', compact('invoice', 'type', 'reference', 'date_facture', 'items', 'par', 'count', 'portes', 'volets', 'items', 'format'));

        return $pdf->download('quote-' . $id . '.pdf');
    }

    public function download_pdf_signature($id)
    {
        $invoice = Quote::find($id);
        $type = 'Devis';
        $date = Carbon::parse($invoice->created_at)->format('Y-m');
        $date_facture = Carbon::parse($invoice->date)->format('d/m/Y');
        $user = User::find($invoice->par);
        if (isset($user))
            $par = $user->name . ' ' . $user->lastname;
        else
            $par = '';

        $format = 'avecsignature';
        $reference = $invoice->reference;
        $items = Item::where('quote', $id)->get();
        $articles = Article::where('quote', $id)->get();
        $portes = Porte::where('quote', $id)->get();
        $volets = Volet::where('quote', $id)->get();
        $count = count($items);

        if ($invoice->menuiserie > 0)
            $pdf = PDF::loadView('invoices.invoice_men', compact('invoice', 'type', 'reference', 'date_facture', 'articles', 'par', 'count', 'portes', 'volets', 'items', 'format'));
        else
            $pdf = PDF::loadView('invoices.invoice', compact('invoice', 'type', 'reference', 'date_facture', 'items', 'par', 'count', 'portes', 'volets', 'items', 'format'));

        //$pdf = PDF::loadView('quotes.quote', compact('invoice','type','reference','date_facture','items','par','count'));
        return $pdf->download('quote-' . $reference . '.pdf');
    }

    public function save_invoice($id)
    {
        $quote = Quote::find($id);

        $user_id = auth()->user()->id;
        $name = strtoupper(User::find($user_id)->name);
        $lastname = strtoupper(User::find($user_id)->lastname);
        $num = Invoice::where('par', $user_id)->where('created_at', 'like',  date('Y-m-d') . '%')->count() + 1;

        $invoice = Invoice::create([
            'description' => $quote->description,
            'adresse' => $quote->adresse,
            'chaudiere' => $quote->chaudiere,
            'modalite' => $quote->modalite,
            'date' => $quote->date,
            'tva' => $quote->tva,
            'remise' => $quote->remise,
            'total_tva' => $quote->total_tva,
            'total_remise' => $quote->total_remise,
            'tva_remise' => $quote->tva_remise,
            'deplacement' => $quote->deplacement,
            'tva_deplacement' => $quote->tva_deplacement,
            'total_deplacement' => $quote->total_deplacement,
            'total_ht' => $quote->total_ht,
            'total_ttc' => $quote->total_ttc,
            'aide_cee' => $quote->aide_cee,
            'aide_renov' => $quote->aide_renov,
            'aide' => $quote->aide,
            'surface_produits' => $quote->surface_produits,
            'montant_finance' => $quote->montant_finance,
            'report_echeance' => $quote->report_echeance,
            'mensualites' => $quote->mensualites,
            'montant_mensuel' => $quote->montant_mensuel,
            'montant_assurance' => $quote->montant_assurance,
            'taux_nominal' => $quote->taux_nominal,
            'taeg' => $quote->taeg,
            'pose' => $quote->pose,
            'customer' => $quote->customer,
            'net' => $quote->net,
            'quote' => $quote->id,
            'acompte' => $quote->acompte,
            'loi' => $quote->loi,
            'total_loi' => $quote->total_loi,

        ]);

        $reference = date('Y-m-') . sprintf('%04d', $id);
        $invoice->reference = $reference;
        $invoice->save();

        $items = Item::where('quote', $id)->get();
        foreach ($items as $item) {
            Item::create([
                'qty' => $item->qty,
                'description' => $item->description,
                'tva' => $item->tva,
                'product' => $item->product,
                'invoice' => $invoice->id,
            ]);
        }

        return redirect()->route('invoices.index')
            ->with('success', 'Facture enregistrée en devis');
    }


    public function ajout_signature(Request $request)
    {
        $id = $request->get('quote');

        $name = '';
        if ($request->file('devis_signe') != null) {
            $file = $request->file('devis_signe');
            $name =  $file->getClientOriginalName();
            $path = public_path() . "/fichiers/";

            $file->move($path, $name);
        }
        Quote::where('id', $id)->update(array('devis_signe' => $name));

        return back()->with('success', 'Fichier enregistré');
    }
    /*
    public function getQuotes(Request $request)
    {
        if ($request->ajax()) {
            //$quotesQuery = Quote::with('customer'); // Chargez la relation customer
            $quotesQuery = Quote::query()
            ->join('customers', 'quotes.customer', '=', 'customers.id')
            ->select('quotes.*', 'customers.civility as customer_civility','customers.name as customer_name', 'customers.lastname as customer_lastname', 'customers.company as customer_company','customers.civility2 as customer_civility2','customers.name2 as customer_name2', 'customers.lastname2 as customer_lastname2');

            if (auth()->user()->user_type != 'admin') {
                $quotesQuery->where('par', auth()->user()->id);
            }

            return DataTables::of($quotesQuery)
                ->editColumn('reference', function($quote) {
                    $type_devis = $this->getTypeDevis($quote->menuiserie);
                    return $quote->reference . '<br><small>' . $type_devis . '</small>';
                })
                ->editColumn('customer', function($quote) {
                    return $quote->customer_company . ' '. $quote->customer_civility . ' ' . $quote->customer_name . ' ' . $quote->customer_lastname.'<br>'.$quote->customer_civility2 . ' ' . $quote->customer_name2 . ' ' . $quote->customer_lastname2;
                })
                ->filterColumn('customer', function ($query, $keyword) {
                    $query->where(function($q) use ($keyword) {
                        $q->where('customers.lastname', 'like', "%{$keyword}%")
                          ->orWhere('customers.name', 'like', "%{$keyword}%")
                          ->orWhere('customers.civility', 'like', "%{$keyword}%")
                          ->orWhere('customers.company', 'like', "%{$keyword}%")
                          ->orWhere('customers.lastname2', 'like', "%{$keyword}%")
                          ->orWhere('customers.name2', 'like', "%{$keyword}%")
                          ->orWhere('customers.civility2', 'like', "%{$keyword}%");
                    });
                })
                ->editColumn('created_at', function($quote) {
                    return date('d/m/Y', strtotime($quote->created_at));
                })
                ->editColumn('total_ttc', function($quote) {
                    return number_format($quote->total_ttc, 0, ',', ' ') . ' €';
                })
                ->addColumn('action', function($quote) {
                    $buttons = '';
                    if (auth()->user()->user_type == 'admin' || auth()->user()->id == $quote->par) {
                        $buttons .= '<a class="btn btn-primary" href="' . route('quotes.edit', $quote->id) . '"><i class="fas fa-edit"></i></a>';
                        $buttons .= '<a class="btn btn-success" href="' . route('quotes.show_pdf', $quote->id) . '"><i class="fas fa-file-pdf"></i></a>';
                    }
                    return $buttons;
                })
                ->rawColumns(['reference','customer', 'action'])  // Permettre le HTML dans certaines colonnes
                ->make(true);
        }
    }
*/

    public function getQuotes(Request $request)
    {
        if ($request->ajax()) {
            $quotesQuery = Quote::query()
                ->join('customers', 'quotes.customer', '=', 'customers.id')
                ->select('quotes.*', 'customers.civility as customer_civility', 'customers.name as customer_name', 'customers.lastname as customer_lastname', 'customers.company as customer_company', 'customers.civility2 as customer_civility2', 'customers.name2 as customer_name2', 'customers.lastname2 as customer_lastname2');

            if (auth()->user()->user_type != 'admin') {
                $quotesQuery->where('par', auth()->user()->id);
            }

            if (!empty($request->type_devis)) {
                $quotesQuery->where('quotes.menuiserie', $request->type_devis);
            }

            return DataTables::of($quotesQuery)
                ->editColumn('reference', function ($quote) {
                    $type_devis = $this->getTypeDevis($quote->menuiserie);
                    return $quote->reference . '<br><small>' . $type_devis . '</small>';
                })
                ->editColumn('customer', function ($quote) {
                    return $quote->customer_company . ' ' . $quote->customer_civility . ' ' . $quote->customer_name . ' ' . $quote->customer_lastname . '<br>' . $quote->customer_civility2 . ' ' . $quote->customer_name2 . ' ' . $quote->customer_lastname2;
                })
                ->editColumn('created_at', function ($quote) {
                    return date('d/m/Y', strtotime($quote->created_at));
                })
                ->editColumn('total_ttc', function ($quote) {
                    return number_format($quote->total_ttc, 0, ',', ' ') . ' €';
                })
                ->filterColumn('customer', function ($query, $keyword) {
                    \Log::info('Filtering by customer with keyword: ' . $keyword);

                    $query->where(function ($q) use ($keyword) {
                        $q->where('customers.lastname', 'like', "%{$keyword}%")
                            ->orWhere('customers.name', 'like', "%{$keyword}%")
                            ->orWhere('customers.civility', 'like', "%{$keyword}%")
                            ->orWhere('customers.company', 'like', "%{$keyword}%")
                            ->orWhere('customers.lastname2', 'like', "%{$keyword}%")
                            ->orWhere('customers.name2', 'like', "%{$keyword}%")
                            ->orWhere('customers.civility2', 'like', "%{$keyword}%");
                    });
                })
                ->filterColumn('created_at', function ($query, $keyword) {
                    $query->whereRaw("DATE_FORMAT(quotes.created_at, '%d/%m/%Y') like ?", ["%{$keyword}%"]);
                })
                ->filterColumn('type_devis', function ($query, $keyword) {
                    $query->where(function ($q) use ($keyword) {
                        if (stripos($keyword, 'menuiserie') !== false) {
                            $q->where('quotes.menuiserie', 1);
                        } elseif (stripos($keyword, 'volets roulants') !== false) {
                            $q->where('quotes.menuiserie', 2);
                        } elseif (stripos($keyword, 'PAC AIR EAU') !== false) {
                            $q->where('quotes.menuiserie', -1);
                        } elseif (stripos($keyword, 'PAC AIR AIR') !== false) {
                            $q->where('quotes.menuiserie', -2);
                        } elseif (stripos($keyword, 'PANNEAU PHOTOVOLTAÏQUE') !== false) {
                            $q->where('quotes.menuiserie', -3);
                        } else {
                            $q->where('quotes.menuiserie', 0); // Pour rechercher les autres types
                        }
                    });
                })
                ->addColumn('action', function ($quote) {
                    $buttons = '';
                    $user = auth()->user();

                    // Check if user is 'admin' or the owner of the quote
                    if ($user->user_type == 'admin' || $user->id == $quote->par) {
                        // Button to edit menuiserie if applicable
                        if ($quote->menuiserie > 0) {
                            $buttons .= '<a class="btn btn-primary mb-3 mr-2" href="' . route('quotes.edit_men', $quote->id) . '" style="float:left" title="Modifier"><i class="fas fa-edit"></i></a>';
                        } else {
                            $buttons .= '<a class="btn btn-primary mb-3 mr-2" href="' . route('quotes.edit', $quote->id) . '" style="float:left" title="Modifier"><i class="fas fa-edit"></i></a>';
                        }
                        // PDF view button
                        $buttons .= '<a class="btn btn-success mb-3 mr-2" target="_blank" href="' . route('quotes.show_pdf', $quote->id) . '" style="float:left" title="Ouvrir en PDF"><i class="fas fa-file-pdf"></i></a>';
                        // PDF download button
                        $buttons .= '<a class="btn btn-secondary mb-3 mr-2" href="' . route('quotes.download_pdf', $quote->id) . '" style="float:left" title="Télécharger"><i class="fas fa-download"></i></a>';
                        // PDF with signature download button
                        $buttons .= '<a class="btn btn-dark mb-3 mr-2" href="' . route('quotes.download_pdf_signature', $quote->id) . '" style="float:left" title="Télécharger avec signature"><i class="fas fa-signature"></i></a>';
                        // Save as invoice button for admin if no invoice exists
                        if (Invoice::where('quote', $quote->id)->doesntExist() && $user->user_type == 'admin') {
                            $buttons .= '<a class="btn btn-warning mb-3 mr-2" href="' . route('quotes.save_invoice', $quote->id) . '" style="float:left" title="Enregistrer en Facture"><i class="fas fa-file"></i></a>';
                        }
                        // Delete button for admin only
                        if ($user->user_type == 'admin') {
                            $buttons .= '<form action="' . route('quotes.destroy', $quote->id) . '" method="POST" style="float:left" class="mr-2">';
                            $buttons .= csrf_field();
                            $buttons .= method_field('DELETE');
                            $buttons .= '<button type="submit" class="btn btn-danger mb-3" title="Supprimer" onclick="return ConfirmDelete();"><i class="fas fa-trash"></i></button>';
                            $buttons .= '</form>';
                        }
                    }
                    return $buttons;
                })
                ->rawColumns(['reference', 'customer', 'action'])  // Permettre le HTML dans certaines colonnes
                ->make(true);
        }

        return view('quotes.index');
    }



    private function getTypeDevis($type)
    {
        switch ($type) {
            case 1:
                return "<b>Menuiserie</b>";
            case 2:
                return "<i>Volets roulants</i>";
            case -1:
                return "PAC AIR <b>EAU</b>";
            case -2:
                return "PAC AIR <b>AIR</b>";
            case -3:
                return "<u>PANNEAU PHOTOVOLTAÏQUE</u>";
            case -4:
                return "CESI / SSC";
            case -5:
                return "POELE GRANULÉS OU BOIS";
            case -6:
                return "ISOLATION";
            case -60:
                return "ISOLATION soufflée";
            case -61:
                return "ISOLATION sous rampant";
            case -62:
                return "ISOLATION extérieur";
            case -63:
                return "ISOLATION intérieur";
            case -7:
                return "BTD";
            case -9:
                return "KIT TETE THERMOSTATIQUE";
            case -8:
                return "AUTRES";

                // Ajoutez les autres types ici
            default:
                return "AUTRES";
        }
    }
}
