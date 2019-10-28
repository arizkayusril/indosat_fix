var dropdown = document.querySelectorAll('.dropdown');
var dropdownArray = Array.prototype.slice.call(dropdown,0);
dropdownArray.forEach(function(el){
	var button = el.querySelector('a[data-toggle="dropdown"]'),
			menu = el.querySelector('.dropdown-menu'),
			arrow = button.querySelector('i.icon-arrow');

	button.onclick = function(event) {
		if(!menu.hasClass('show')) {
			menu.classList.add('show');
			menu.classList.remove('hide');
			arrow.classList.add('open');
			arrow.classList.remove('close');
			event.preventDefault();
		}
		else {
			menu.classList.remove('show');
			menu.classList.add('hide');
			arrow.classList.remove('open');
			arrow.classList.add('close');
			event.preventDefault();
		}
	};
})
Element.prototype.hasClass = function(className) {
    return this.className && new RegExp("(^|\\s)" + className + "(\\s|$)").test(this.className);
};
$(document).ready(function() {
    $("#panel-admin").css("display", "none");

    $('.open').click(function() {
        $("#panel-admin").animate({ width: 'toggle' }, 100);
    });

    if (!document.getElementById('wrapper').className && !localStorage.getItem("selectedColor")) {
        console.log('in if');
        document.getElementById('wrapper').classList.add('orange');
    } else {
        console.log('else');
        var colorClass = localStorage.getItem("selectedColor");
        document.getElementById('wrapper').classList.add(colorClass);
    }


    $('.panel-group').on('hidden.bs.collapse', toggleIcon);
    $('.panel-group').on('shown.bs.collapse', toggleIcon);

});


$(window).scroll(function() {

    if ($(this).scrollTop() > 50) {
        $('header').addClass("sticky");
    } else {
        $('header').removeClass("sticky");
    }
});


function toggleIcon(e) {
    $(e.target)
        .prev('.panel-heading')
        .find(".more-less")
        .toggleClass('fa-plus fa-minus');
}

function mytheme(index) {
    switch (index) {
        case 0:
            changeColor('orange');
            break;
        case 1:
            changeColor('orange');
            break;
        case 2:
            changeColor('orange');
            break;
        case 3:
            changeColor('orange');
            break;
        case 4:
            changeColor('orange');
            break;
        case 5:
            changeColor('orange');
            break;
        default:
            changeColor('orange');
    }
    var selectedClass = document.getElementById('wrapper').className;
    localStorage.setItem("selectedColor", selectedClass);
}

function changeColor(color) {
    $('#wrapper').removeClass();
    $('#wrapper').addClass(color);
}