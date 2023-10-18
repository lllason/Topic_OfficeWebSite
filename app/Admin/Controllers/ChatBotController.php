<?php

namespace App\Admin\Controllers;

use App\Models\Chatbot;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class ChatBotController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Chatbot';


    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Chatbot());

        $grid->column('id', __('Id'));
        $grid->column('rul_name', __('Rule Name'));
        $grid->column('intent', __('Intent'));
        $grid->column('example', __('Example'));
        $grid->column('response', __('Response'));
        $grid->column('created_at', __('Created at'));
        $grid->column('updated_at', __('Updated at'));

        return $grid;
    }

    /**
     * Make a show builder.
     *
     * @param mixed $id
     * @return Show
     */
    protected function detail($id)
    {
        $show = new Show(Chatbot::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('rule_name', __('Name'));
        $show->field('intent', __('Intent'));
        $show->field('example', __('Intent'));
        $show->field('response', __('Response'));
        $show->field('created_at', __('Created at'));
        $show->field('updated_at', __('Updated at'));
        
        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */

    protected function form()
    {
        $form = new Form(new Chatbot());
        $form->text('rule_name', __('規則目錄'));
        $form->text('intent', __('Intent'));
        $form->text('example', __('Intent'));
        $form->text('response', __('Response'));
        $form->text('created_at', __('Created at'));
        $form->text('updated_at', __('Updated at'));

        return $form;
    }
}
