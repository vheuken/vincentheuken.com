var FADE_DURATION = 1000;
var CURRENT_CONTENT_SHOWN = '#about';

var contentList = new Array();
contentList[0] = '#about';
contentList[1] = '#blog';
contentList[2] = '#resume';
contentList[3] = '#projects';
contentList[4] = '#contact';

$(document).ready( function() 
{
	for (var i = 0; i < contentList.length; i++)
	{
		$(contentList[i]).hide();
	}
	
	if ((window.location.hash.length === 0) || !isValidHash(window.location.hash))
	{
		$(CURRENT_CONTENT_SHOWN).fadeIn(FADE_DURATION);
	}
	else
	{
		$(window.location.hash).fadeIn(FADE_DURATION);
	}
});

function changeContentShown(contentToShow)
{
	if (contentToShow !== CURRENT_CONTENT_SHOWN)
	{
		// if fadeIn is in progress, stop it
		$(CURRENT_CONTENT_SHOWN).stop();
		
		$(CURRENT_CONTENT_SHOWN).fadeOut(FADE_DURATION/2);
		
		contentFadeInCommand = "$('" + contentToShow + "').fadeIn(FADE_DURATION);";
		
		window.setTimeout(contentFadeInCommand, FADE_DURATION/2);
		CURRENT_CONTENT_SHOWN = contentToShow;
		
		window.location.hash = contentToShow;
	}
}

function isValidHash(hash)
{
	for (var i = 0; i < contentList.length; i++)
	{
		if (contentList[i] === hash)
		{
			return true;
		}
	}
	
	return false;
}


$(window).hashchange( function()
{
  changeContentShown(location.hash);
})	
	