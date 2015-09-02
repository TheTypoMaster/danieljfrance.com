var PageManager = {

	list : null,

	init : function()
	{

		this.list = $('#pages');

		// Bind Events

		$('body').on('click', '.add_primary', this.addPage);
		$('body').on('click', '.add_secondary', this.addPage);
		$('body').on('click', '.add_tertiary', this.addPage);

		var secondary = $('ul[data-list-type="secondary"]');

		var secondary_sortable = secondary.sortable(
		{
			items : '> li[data-page-type="secondary"]',
			change : function(event, ui)
			{
				// console.log(secondary.children('li[data-page-type="secondary"]'));
				// console.log('changed');
				console.log(event);
				// console.log(ui);

			}
		}
		);

	},

	addPage : function(event)
	{
		var el = $(event.target);
		var input = el.prev();

		if(input.val())
		{

			var page_data = { title: input.val(), type: el.attr('data-page-type'), parent_page_id : null };

			var parent_type = null;

			if(page_data.type != 'primary')
			{
				if(page_data.type == 'secondary') parent_type = 'primary';
				if(page_data.type == 'tertiary') parent_type = 'secondary';
				page_data.parent_page_id = el.parents('li[data-page-type="'+parent_type+'"]').attr('data-id');
			}

			if(page_data.type == 'primary' || page_data.parent_page_id !== null)
			{

				// Create Page
				$.post("/admin/pages", page_data, function(data)
				{
					if(data.success)
					{

						var page_item_markup = '<li data-page-type="'+page_data.type+'" data-id="'+data.page.id+'" id="page_'+data.page.id+'">';

						page_item_markup += '<a href="'+data.uri+'">'+input.val()+'</a>';

						if(page_data.type == 'primary')
						{
							page_item_markup += '<ul data-list-type="secondary">';
								page_item_markup += '<li><input type="text" name="" placeholder="Title"><button type="button" class="add_secondary" data-page-type="secondary">+ Add Secondary Page</button></li>';
						}

						if(page_data.type == 'primary' || page_data.type == 'secondary')
						{
								page_item_markup += '<ul data-list-type="tertiary">';

									page_item_markup += '<li><input type="text" name="" placeholder="Title"><button type="button" class="add_tertiary" data-page-type="tertiary">+ Add Tertiary Page</button></li>';

								page_item_markup += '</ul>';
						}

						if(page_data.type == 'primary')
						{
							page_item_markup += '</ul>';
						}

						page_item_markup += '</li>';

						el.parent().before(page_item_markup);
						input.val('');
					}
				});
				
			}
		}
	},

	removePage : function()
	{
		
	}

}

$(document).ready(function(){

	PageManager.init();

});