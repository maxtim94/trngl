function banner()
{	
	$('#prewait').show(100);
	$('#wait').show(100);
	$('#wt').show(100);
	$("#timer").text("10");
	$("#link").hide();
	$("#lllh").hide();
	
	var 

	btn1h = $('#btn1h').css(
	{
		opacity: 0,
		left: 629,
		top: 95,
	}),
	menuAll = $('#menuAll').css(
		{
			left: 274,
			top: 7,
			opacity: 0,
			display: 'none'
		});

	btn1h.delay(10000).animate({opacity: 1}, 500, function(){
		$("#lllh").show();
	});

	setTimeout(showMenu, 10000);
	
}

function bannerv()
{	
	$('#prewait').show(100);
	$('#wait').show(100);
	$('#wt').show(100);
	$("#timer").text("10");
	$("#link").hide();
	$("#tstat").show();
	$("#tstat2").show();
	$("#lllv").hide();
	var 
	
	btn1v = $('#btn1v').css(
	{
		opacity: 0,
		left: 220,
		top: 450,
	}),
	menuAllv = $('#menuAllv').css(
		{
			left: 177,
			top: 9,
			opacity: 0,
			display: 'none'
		});
	
	
	btn1v.delay(10000).animate({opacity: 1}, 500, function(){
		$("#lllv").show();
	});
	setTimeout(showMenuv, 10000);
	
}

function bannerp()
{	
	$('#prewait').show(100);
	$('#wait').show(100);
	$('#wt').show(100);
	$("#timer").text("10");
	$("#link").hide();
	$("#tstat").show();
	$("#tstat2").show();
	$("#lllp").hide();
	var 
	
	btn1p = $('#btn1p').css(
	{
		opacity: 0,
		left: 625,
		top: 97,
	
	}),
	
	menuAllp = $('#menuAllp').css(
		{
			left: 294,
			top: 7,
			opacity: 0,
			display: 'none'
		});
	
	btn1p.delay(10000).animate({opacity: 1}, 500, function(){
		$("#lllp").show();
	});
	setTimeout(showMenup, 10000);
	
}

function showMenu()
{
	$("#menuAll").css("display", "block");
	$("#menuAll").animate(
	{
		opacity: '1'
	}, 500, 'easeOutBack', startDancing);
}

function showMenuv()
{
	$("#menuAllv").css("display", "block");
	$("#menuAllv").animate(
	{
		opacity: '1'
	}, 500, 'easeOutBack', startDancing);
}

function showMenup()
{
	$("#menuAllp").css("display", "block");
	$("#menuAllp").animate(
	{
		opacity: '1'
	}, 500, 'easeOutBack', startDancing);
}

function timerOutTime()
{
	$('#timer').timer(9, {
		9: function()
		{
			$('#timer').css(
			{
				'padding-left': 1
			})
		},
		0: function()
		{
			$('#wait').hide(100);
			$('#wt').hide(100);
			$('#prewait').hide(100);
		}
	});
}

var rotation = function()
{
	$("#wr").rotate(
	{
		angle: 0,
		animateTo: 360,
		callback: rotation,
		easing: function(x, t, b, c, d)
		{ // t: current time, b: begInnIng value, c: change In value, d: duration
			return c * (t / d) + b;
		}
	});
}

function replay()
{
	stopDancing();
	timerOutTime();
	banner();
	bannerv();
	bannerp();
	return false;
}

$(document).ready(function(e)
{	
	
	rotation();
	$(window).load(function()
	{	
		$('#loading').remove();
		$('.content').show();
		timerOutTime();
		banner();
		bannerv();
		bannerp();
	})
});

function startDancing()
{
	dancing();
	danceInterval = setInterval(dancing, 3000);
}

function dancing()
{
	var dancingItems = new Array();
	dancingItems[0] =
	{
		name: '#cta div',
		delay: 600
	};
	dancingItems[1] =
	{
		name: '#cta2 div',
		delay: 800
	};
	for (var i = 0; i < 2; i++)
	{
		$(dancingItems[i].name).delay(dancingItems[i].delay).animate(
		{
			left: '180'
		}, 800, 'easeInOutSine', function()
		{
			$(this).css(
			{
				left: -180
			});
		});
	}
}

function stopDancing()
{
	clearInterval(danceInterval);
	openedPopup = 0;
}