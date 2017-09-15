<?php

namespace App\Admin\Controllers;

use App\Models\Article;

use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Facades\Admin;
use Encore\Admin\Layout\Content;
use App\Http\Controllers\Controller;
use Encore\Admin\Controllers\ModelForm;

class ArticleController extends Controller
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
        return Admin::grid(Article::class, function (Grid $grid) {

            $grid->id('ID')->sortable();
            $grid->column('tag', '标签')->display(function ($tag) {
                switch ($tag) {
                    case 1:
                        return '3G全息';
                    case 2:
                        return 'CG视频';
                    case 3:
                        return '互动产品';
                    case 4:
                        return '数字展厅';
                }
            });
            $grid->column('title', '标题');
            $grid->column('top_img', '头图')->image('', 150, 150);
            $grid->column('intro', '简介')->limit(50);
            $grid->created_at();
            $grid->updated_at();
        });
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        return Admin::form(Article::class, function (Form $form) {

            $form->display('id', 'ID');
            $form->text('title', '文章标题');
            $form->select('tag', '标签')->options([
                '1' => '3G全息',
                '2' => 'CG视频',
                '3' => '互动产品',
                '4' => '数字展厅'
            ]);
            $form->image('top_img', '文章大图')->uniqueName();
            $form->textarea('intro', '简介');
            $form->wangeditor('content', '文章内容');
            $form->display('created_at', 'Created At');
            $form->display('updated_at', 'Updated At');
        });
    }
}
