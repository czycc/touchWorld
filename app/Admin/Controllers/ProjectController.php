<?php

namespace App\Admin\Controllers;

use App\Models\Project;

use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Facades\Admin;
use Encore\Admin\Layout\Content;
use App\Http\Controllers\Controller;
use Encore\Admin\Controllers\ModelForm;

class ProjectController extends Controller
{
    use ModelForm;

    /**
     * Index interface.
     *
     * @return Content
     */
    public function index()
    {
        return Admin::content(function (Content $content) {

            $content->header('header');
            $content->description('description');

            $content->body($this->grid());
        });
    }

    /**
     * Edit interface.
     *
     * @param $id
     * @return Content
     */
    public function edit($id)
    {
        return Admin::content(function (Content $content) use ($id) {

            $content->header('header');
            $content->description('description');

            $content->body($this->form()->edit($id));
        });
    }

    /**
     * Create interface.
     *
     * @return Content
     */
    public function create()
    {
        return Admin::content(function (Content $content) {

            $content->header('header');
            $content->description('description');

            $content->body($this->form());
        });
    }

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        return Admin::grid(Project::class, function (Grid $grid) {

            $grid->id('ID')->sortable();
            $grid->column('name', '项目名称');
            $grid->column('location', '项目地点');
            $grid->column('dateStart', '开始时间');
            $grid->column('dateOver', '结束时间');
            $grid->column('principal', '负责人');
            $grid->column('supervision', '监督人');
            $grid->column('info', '项目详情');
            $grid->column('remark', '备注');
            $grid->column('pub', '网站公众号推送');
        });
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        return Admin::form(Project::class, function (Form $form) {

            $form->display('id', 'ID');
            $form->text('name', '项目名称');
            $form->text('location', '项目地点');
            $form->date('dateStart', '开始时间');
            $form->date('dateOver', '结束时间');
            $form->text('principal', '负责人');
            $form->text('supervision', '监督人');
            $form->text('pub','网站公众号推送');
            $form->textarea('info', '项目详情');
            $form->textarea('remark', '备注');
        });
    }
}
