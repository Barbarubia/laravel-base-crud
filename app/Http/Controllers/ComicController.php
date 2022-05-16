<?php

namespace App\Http\Controllers;

use App\Comic;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class ComicController extends Controller
{
    // Parametri di validazione dei campi del form
    protected $validationParameters = [
        'title'             => 'required|unique:comics|max:100',
        'description'       => 'required',
        'thumb'             => 'required|url|max:250',
        'price'             => 'required|numeric',
        'series'            => 'required|max:100',
        'sale_date'         => 'required|date',
        'type'              => 'required|max:50'
    ];

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comics = Comic::all();

        return view('comics.index', compact('comics'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return  view('comics.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        // Validazione dei dati inseriti
        $request->validate($this->validationParameters);

        // Variabile inputForm per richiedere tutti i dati inseriti nel form della pagina comics.create
        $inputForm = $request->all();

        // Creazione della nuova riga nel database con i dati inseriti nel form
        $newComic = Comic::create($inputForm);

        // Redirect all'indice dei comics
        return redirect()->route('comics.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function show(Comic $comic)
    {
        return view('comics.show', [
            'comic' => $comic
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function edit(Comic $comic)
    {
        return view('comics.edit', compact('comic'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Comic $comic)
    {
        // Validazione dei dati del form modificati ignorando la proprietà "unique" del titolo solo per la risorsa selezionata
        $this->validationParameters['title'] = [
            'required',
            Rule::unique('comics')->ignore($comic),
            'max:100'
        ];

        $request->validate($this->validationParameters);

        // Modifica dei dati nel database
        $inputForm = $request->all();

        $comic->update($inputForm);

        // Reindirizzamento alla pagina del comic
        return redirect()->route('comics.show', $comic->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comic $comic)
    {
        $comic->delete();

        return redirect()->route('comics.index');
    }
}
