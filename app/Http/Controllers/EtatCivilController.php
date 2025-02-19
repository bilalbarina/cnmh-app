<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateEtatCivilRequest;
use App\Http\Requests\UpdateEtatCivilRequest;
use App\Http\Controllers\AppBaseController;
use App\Repositories\EtatCivilRepository;
use Illuminate\Http\Request;
use Flash;

class EtatCivilController extends AppBaseController
{
    /** @var EtatCivilRepository $etatCivilRepository*/
    private $etatCivilRepository;

    public function __construct(EtatCivilRepository $etatCivilRepo)
    {
        $this->etatCivilRepository = $etatCivilRepo;
    }

    /**
     * Display a listing of the EtatCivil.
     */
    public function index(Request $request)
    {
        $etatCivils = $this->etatCivilRepository->paginate(10);

        return view('etat_civils.index')
            ->with('etatCivils', $etatCivils);
    }

    /**
     * Show the form for creating a new EtatCivil.
     */
    public function create()
    {
        return view('etat_civils.create');
    }

    /**
     * Store a newly created EtatCivil in storage.
     */
    public function store(CreateEtatCivilRequest $request)
    {
        $input = $request->all();

        $etatCivil = $this->etatCivilRepository->create($input);

        Flash::success(__('messages.saved', ['model' => __('models/etatCivils.singular')]));

        return redirect(route('etatCivils.index'));
    }

    /**
     * Display the specified EtatCivil.
     */
    public function show($id)
    {
        $etatCivil = $this->etatCivilRepository->find($id);

        if (empty($etatCivil)) {
            Flash::error(__('models/etatCivils.singular').' '.__('messages.not_found'));

            return redirect(route('etatCivils.index'));
        }

        return view('etat_civils.show')->with('etatCivil', $etatCivil);
    }

    /**
     * Show the form for editing the specified EtatCivil.
     */
    public function edit($id)
    {
        $etatCivil = $this->etatCivilRepository->find($id);

        if (empty($etatCivil)) {
            Flash::error(__('models/etatCivils.singular').' '.__('messages.not_found'));

            return redirect(route('etatCivils.index'));
        }

        return view('etat_civils.edit')->with('etatCivil', $etatCivil);
    }

    /**
     * Update the specified EtatCivil in storage.
     */
    public function update($id, UpdateEtatCivilRequest $request)
    {
        $etatCivil = $this->etatCivilRepository->find($id);

        if (empty($etatCivil)) {
            Flash::error(__('models/etatCivils.singular').' '.__('messages.not_found'));

            return redirect(route('etatCivils.index'));
        }

        $etatCivil = $this->etatCivilRepository->update($request->all(), $id);

        Flash::success(__('messages.updated', ['model' => __('models/etatCivils.singular')]));

        return redirect(route('etatCivils.index'));
    }

    /**
     * Remove the specified EtatCivil from storage.
     *
     * @throws \Exception
     */
    public function destroy($id)
    {
        $etatCivil = $this->etatCivilRepository->find($id);

        if (empty($etatCivil)) {
            Flash::error(__('models/etatCivils.singular').' '.__('messages.not_found'));

            return redirect(route('etatCivils.index'));
        }

        $this->etatCivilRepository->delete($id);

        Flash::success(__('messages.deleted', ['model' => __('models/etatCivils.singular')]));

        return redirect(route('etatCivils.index'));
    }
}
