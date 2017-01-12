export default class Pager
{

	inputAttribute = 'data-page-input';
	buttonAttribute = 'data-page-button';

	live()
	{
		let _this = this,
			resizeInput = function() {
				let $this = $(this),
					size = $this.val().length;
				size = size * 10;
				$this.css('width', size + 15);
			},
			sendData = function(e) {
				e.preventDefault();

				let $this = $(this),
					input = $this.closest('.input-group').find('input[' + _this.inputAttribute + ']');

				let out = window.mesour.url.createLink($this.attr(_this.buttonAttribute), 'setPage', {
					'page': input.val()
				}, true);

				$.post.apply($, out).complete(window.mesour.redrawCallback);
			};
		jQuery('input[' + this.inputAttribute + ']')
			.keyup(resizeInput)
			.keyup(function (e) {
				if (e.keyCode === 13) {
					sendData.call(jQuery(this).closest('.input-group').find('[' + _this.buttonAttribute + ']'), e);
				}
			})
			.each(resizeInput);

		jQuery('[' + this.buttonAttribute + ']')
			.on('click', sendData);
	}

}