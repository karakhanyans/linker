<?php

Admin::model('App\Category')->title('Categories')->display(function ()
{
	$display = AdminDisplay::datatables();
	$display->with('link');
	$display->filters([

	]);
	$display->columns([
		Column::string('name')->label('Name'),
		Column::count('link')->label('Links count'),
	]);
	return $display;
})->createAndEdit(function ()
{
	$form = AdminForm::form();
	$form->items([
		FormItem::text('name', 'Name'),
	]);
	return $form;
});