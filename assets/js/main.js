jQuery(document).ready(function($) {


    /*======= Skillset *=======*/
    
    $('.level-bar-inner').css('width', '0');
    
    $(window).on('load', function() {

        $('.level-bar-inner').each(function() {
        
            var itemWidth = $(this).data('level');
            
            $(this).animate({
                width: itemWidth
            }, 800);
            
        });

    });
    
    /* Bootstrap Tooltip for Skillset */
    $('.level-label').tooltip();
    
    /* jQuery RSS - https://github.com/sdepold/jquery-rss */
    $("#rss-feeds").rss(
    
        //Change this to your own rss feeds
        "http://feeds.feedburner.com/TechCrunch/startups",
        
        {
        // how many entries do you want?
        // default: 4
        // valid values: any integer
        limit: 3,
        
        // the effect, which is used to let the entries appear
        // default: 'show'
        // valid values: 'show', 'slide', 'slideFast', 'slideSynced', 'slideFastSynced'
        effect: 'slideFastSynced',
        
        // outer template for the html transformation
        // default: "<ul>{entries}</ul>"
        // valid values: any string
        layoutTemplate: "<div class='item'>{entries}</div>",
        
        // inner template for each entry
        // default: '<li><a href="{url}">[{author}@{date}] {title}</a><br/>{shortBodyPlain}</li>'
        // valid values: any string
        entryTemplate: '<h3 class="title"><a href="{url}" target="_blank">{title}</a></h3><div><p>{shortBodyPlain}</p><a class="more-link" href="{url}" target="_blank"><i class="fa fa-external-link"></i>Read more</a></div>'
        
        }
    );
    
    /* Github Activity Feed - https://github.com/caseyscarborough/github-activity */
    GitHubActivity.feed({ username: "caseyscarborough", selector: "#ghfeed" });


});

    $(document).ready(function() {
        $('.box_skitter').skitter({
             theme: "clean", // minimalist, round, clean, square, untuk default baris ini dihilangkan
             numbers_align: "center", 
             dots: false, // true, false
             preview: true, // true, false
             controls: true, // true, false
             controls_position: "leftBottom", // center, leftTop, rightTop, leftBottom, rightBottom
             progressbar: true, // true, false
             enable_navigation_keys: true, // true, false
             animation:"randomSmart", // cube, cubeRandom, block, cubeStop, cubeHide, cubeSize, horizontal, showBars, showBarsRandom, tube, fade, fadeFour, paralell, blind, blindHeight, blindWidth, directionTop, directionBottom, directionRight, directionLeft, cubeStopRandom, cubeSpread, cubeJelly, glassCube, glassBlock, circles, circlesInside, circlesRotate, cubeShow, upBars, downBars, hideBars, swapBars, swapBarsBack, swapBlocks, cut, random, randomSmart
             labelAnimation: "slideUp", // Label animation type, slideUp, left, right, fixed
             interval: 3000, // waktu transisi
        });
    });