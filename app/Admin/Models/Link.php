<?php

Admin::model('App\Link')->title('Links')->display(function ()
{
	$display = AdminDisplay::datatables();
	$display->with('user');
	$display->filters([

	]);
	$display->order([[0,'desc']]);
	$display->columns([
		Column::string('link')->label('Link'),
		Column::string('title')->label('Title'),
		Column::string('views')->label('Views'),
		Column::string('user.name')->label('Username'),
		Column::string('user.lastname')->label('Lastname'),
	]);
	return $display;
})->createAndEdit(function ()
{
	$form = AdminForm::form();
	$form->items([
		FormItem::text('link', 'Link'),
//		FormItem::select('user_id', 'User')->model('App\User')->display('title'),
		FormItem::text('category_id', 'Category'),
		FormItem::text('title', 'Title'),
		FormItem::text('image', 'Image'),
		FormItem::text('tags', 'Tags'),
//		FormItem::text('views', 'Views'),
	]);
	return $form;
});