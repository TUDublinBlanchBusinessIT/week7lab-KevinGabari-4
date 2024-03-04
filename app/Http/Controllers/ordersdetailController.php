<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateordersdetailRequest;
use App\Http\Requests\UpdateordersdetailRequest;
use App\Repositories\ordersdetailRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class ordersdetailController extends AppBaseController
{
    /** @var ordersdetailRepository $ordersdetailRepository*/
    private $ordersdetailRepository;

    public function __construct(ordersdetailRepository $ordersdetailRepo)
    {
        $this->ordersdetailRepository = $ordersdetailRepo;
    }

    /**
     * Display a listing of the ordersdetail.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $ordersdetails = $this->ordersdetailRepository->all();

        return view('ordersdetails.index')
            ->with('ordersdetails', $ordersdetails);
    }

    /**
     * Show the form for creating a new ordersdetail.
     *
     * @return Response
     */
    public function create()
    {
        return view('ordersdetails.create');
    }

    /**
     * Store a newly created ordersdetail in storage.
     *
     * @param CreateordersdetailRequest $request
     *
     * @return Response
     */
    public function store(CreateordersdetailRequest $request)
    {
        $input = $request->all();

        $ordersdetail = $this->ordersdetailRepository->create($input);

        Flash::success('Ordersdetail saved successfully.');

        return redirect(route('ordersdetails.index'));
    }

    /**
     * Display the specified ordersdetail.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $ordersdetail = $this->ordersdetailRepository->find($id);

        if (empty($ordersdetail)) {
            Flash::error('Ordersdetail not found');

            return redirect(route('ordersdetails.index'));
        }

        return view('ordersdetails.show')->with('ordersdetail', $ordersdetail);
    }

    /**
     * Show the form for editing the specified ordersdetail.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $ordersdetail = $this->ordersdetailRepository->find($id);

        if (empty($ordersdetail)) {
            Flash::error('Ordersdetail not found');

            return redirect(route('ordersdetails.index'));
        }

        return view('ordersdetails.edit')->with('ordersdetail', $ordersdetail);
    }

    /**
     * Update the specified ordersdetail in storage.
     *
     * @param int $id
     * @param UpdateordersdetailRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateordersdetailRequest $request)
    {
        $ordersdetail = $this->ordersdetailRepository->find($id);

        if (empty($ordersdetail)) {
            Flash::error('Ordersdetail not found');

            return redirect(route('ordersdetails.index'));
        }

        $ordersdetail = $this->ordersdetailRepository->update($request->all(), $id);

        Flash::success('Ordersdetail updated successfully.');

        return redirect(route('ordersdetails.index'));
    }

    /**
     * Remove the specified ordersdetail from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $ordersdetail = $this->ordersdetailRepository->find($id);

        if (empty($ordersdetail)) {
            Flash::error('Ordersdetail not found');

            return redirect(route('ordersdetails.index'));
        }

        $this->ordersdetailRepository->delete($id);

        Flash::success('Ordersdetail deleted successfully.');

        return redirect(route('ordersdetails.index'));
    }
}
