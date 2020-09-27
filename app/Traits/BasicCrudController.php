<?php

namespace App\Traits;

use Exception;

/**
 * Required properties:
 * $model, $viewPath, $routePath
 *
 * You also must instance your store and update request
 * and then, call them.
 */
trait BasicCrudController {
    /**
     * Model Path used to make crud operations.
     *
     * @var object
     */
    protected $modelPath;

    protected $modelPrefix = "\App\Models\\";
    /**
     * View path prefix to crud operations.
     *
     * @var object
     */
    protected $viewPath;

    /**
     * Route path that we redirect our user after
     * do any action.
     *
     * @var string
     */
    protected $routePath;

    /**
     * If true, the results will be paginated.
     *
     * @var boolean
     */
    protected $paginate = false;

    /**
     * Message used when model is successfull created.
     * @var string
     */
    protected $storeSuccessMessage = null;

    /**
     * Message used when model is successfull updated.
     * @var string
     */
    protected $updateSuccessMessage = null;

    /**
     * Message used when model is successfull destroyed.
     * @var string
     */
    protected $destroySuccessMessage = null;

    /**
     * Message used when there is some error with index
     * method.
     * @var string
     */
    protected $indexErrorMessage = null;

    /**
     * Message used when there is some error with index
     * method.
     * @var string
     */
    protected $createErrorMessage = null;

    /**
     * Message used when there is some error with create
     * method.
     * @var string
     */
    protected $storeErrorMessage = null;

    /**
     * Message used when there is some error with store
     * method.
     * @var string
     */
    protected $showErrorMessage = null;

    /**
     * Message used when there is some error with edit
     * method.
     * @var string
     */
    protected $editErrorMessage = null;

    /**
     * Message used when there is some error with update
     * method.
     * @var string
     */
    protected $updateErrorMessage = null;

    /**
     * Message used when there is some error with destroy
     * method.
     * @var string
     */
    protected $destroyErrorMessage = null;

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($data=null)
    {
        try {
            $model = $this->modelPrefix . $this->modelPath;
            $model = new $model;

            $view = $this->viewPath . ".index";

            $modelData = $this->paginate ? $model->paginate(10) : $model->all();

            if($data) {
                return view($view, [
                    'data' => [
                        $modelData,
                        $data
                    ]
                ]);
            }

            return view($view, [
                'data' => $modelData
            ]);
        } catch(Exception $e) {
            if(config('app.debug'))
                throw new Exception($e->getMessage());

            return redirect()->back()->with([
                'error' => __($this->indexErrorMessage ?? 'system.errors.commom'),
            ]);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($data=null)
    {
        try {
            $view = $this->viewPath . ".create";

            return view($view, [
                'data' => $data
            ]);
        } catch(Exception $e) {
            if(config('app.debug'))
                throw new Exception($e->getMessage());

            return redirect()->back()->with([
                'error' => __($this->createErrorMessage ?? 'system.errors.commom'),
            ]);
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\?
     * @return \Illuminate\Http\Response
     */
    public function store($request)
    {
        try {
            $model = $this->modelPrefix . $this->modelPath;
            $model = new $model;

            $model->create($request);

            return redirect()->route($this->routePath . ".create")->with([
                'success' => __($this->storeSuccessMessage ?? 'system.success.created')
            ]);
        } catch(Exception $e) {
            if(config('app.debug'))
                throw new Exception($e->getMessage());

            return redirect()->back()->with([
                'error' => __($this->storeErrorMessage ?? 'system.errors.commom'),
            ]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id, $data=null)
    {
        try {
            $model = $this->modelPrefix . $this->modelPath;
            $model = new $model;

            $resource = $model->findOrFail($id);
            $view = $this->viewPath . ".show";

            if($data) {
                return view($view, [
                    'data' => [
                        $resource,
                        $data
                    ]
                ]);
            }

            return view($view, [
                'data' => $resource
            ]);
        } catch(Exception $e) {
            if(config('app.debug'))
                throw new Exception($e->getMessage());

            return redirect()->back()->with([
                'error' => __($this->showErrorMessage ?? 'system.errors.commom'),
            ]);
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id, $data=null)
    {
        try {
            $model = $this->modelPrefix . $this->modelPath;
            $model = new $model;

            $resource = $model->findOrFail($id);
            $view = $this->viewPath . ".edit";

            if($data) {
                return view($view, [
                    'data' => [
                        $resource,
                        $data
                    ]
                ]);
            }

            return view($view, [
                'data' => $resource
            ]);
        } catch(Exception $e) {
            if(config('app.debug'))
                throw new Exception($e->getMessage());

            return redirect()->back()->with([
                'error' => __($this->editErrorMessage ?? 'system.errors.commom'),
            ]);
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update($request, $id)
    {
        try {
            $model = $this->modelPrefix . $this->modelPath;
            $model = new $model;

            $model->findOrFail($id)->update($request);

            return redirect()->route($this->routePath . ".edit")->with([
                'success' => __($this->updateSuccessMessage ?? 'system.success.updated')
            ]);
        } catch(Exception $e) {
            if(config('app.debug'))
                throw new Exception($e->getMessage());

            return redirect()->back()->with([
                'error' => __($this->updateErrorMessage ?? 'system.errors.commom'),
            ]);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            $model = $this->modelPrefix . $this->modelPath;
            $model = new $model;

            $model->findOrFail($id)->destroy();

            return redirect()->route($this->routePath . ".index")->with([
                'success' => __($this->destroySuccessMessage ?? 'system.success.destroyed')
            ]);
        } catch(Exception $e) {
            if(config('app.debug'))
                throw new Exception($e->getMessage());

            return redirect()->back()->with([
                'error' => __($this->destroyErrorMessage ?? 'system.errors.commom'),
            ]);
        }
    }
}
