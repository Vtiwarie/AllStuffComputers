/******************************************************************************
 * AUTHOR: Vishaan Tiwarie
 * 
 * DESCRIPTION: Javascript/JQuery effects 
 ******************************************************************************/

var computers = {
    laptops: 'alienware_laptop.jpg',
    desktops: 'apple_desktop.jpg',
    tablets: 'apple_tablet.jpg',
    harddrives: 'wd_hard_drive.jpg',
    monitors: 'viewsonic_monitor.jpg', 
    printers: 'hp_printer.jpg',
    routers: 'linksys_router.jpg',
    getLength: function()
    {
        var count=0;
        for(i in computers)
        {
            if(typeof this[i] === 'string')
            {
                count++; 
            }
        }
        return count;
    }
        
};


function headerDisplay()
{
    var computers = ['Laptops', 'Desktops', 'Tablets', 'Hard Drives', 'Monitors', 'Printers', 'Routers'];
    computers.sort();
    
    var rand = U.getRandomNumber(computers);
    var i=0;

    for(var j=0; j<computers.length; j++)
        clearImage(computers[j]);
    addImageEffects(rand, 30000);

    addText('computers', {
        position: 'relative', 
        fontWeight: 'normal', 
        left: '20px',
        bottom: '50%',
        fontSize: '40px',
        opacity: 0
    });
    addTextEffects('computers', rand, 3500);
      
    i++;
    
    setInterval(function()
    {
        rand = U.getRandomNumber(computers);

        for(var j=0; j<computers.length; j++)
            clearImage(computers[j]);
        addImageEffects(rand, 30000);

        addText('computers', {
            position: 'relative', 
            fontWeight: 'normal', 
            left: '20px',
            bottom: '50%',
            fontSize: '40px',
            opacity: 0
        });
     
        addTextEffects('computers', rand, 3500);
     }, 3500);
    

}

function addText(id, options)
{
    var span;
    if($("#" + id).length>0)  
    {
        $("#" + id).remove();

    }
    span = document.createElement("span");
    span.id = id.toString();
    span.style.position = options.position;
    span.style.fontWeight = options.fontWeight;
    span.style.left = options.left;
    span.style.bottom = options.bottom;
    span.style.opacity = options.opacity;
    span.style.fontSize = options.fontSize;
    span.style.fontFamily = 'times new roman';
    
    $("#" + id).text(span.id);
    $(".banner").append(span);
}

function addTextEffects(id, comp, time)
{
    
    $("#" + id).text(comp).animate({
        opacity: '100',
        left: "+=20px"
        
    }, 0.75*time);
    
    $("#" + id).text(comp).animate({
        opacity: '0',
        left: "+=10px"
        
    }, 0.25*time);
    
    

}
function addImageEffects(comp, time)
{
    comp = comp.toString().toLowerCase().replace(" ", "");
    clearImage(comp);
    addImage(comp, {
        src : "../images/" + computers[comp], 
        width : "80px",
        height : "100%",
        position : 'relative',
        opacity : '0',
        paddingLeft : '20px'
    });
    $("#" + comp).animate({
        opacity: '100'
    }, time/2);
    $("#" + comp).animate({
        opacity: '0'
    }, time/2);
    
    
}

function addImage(comp, options)
{
    comp = comp.toString().toLowerCase().replace(" ", "");
    
    if(computers.hasOwnProperty(comp))
    {
        if(typeof computers[comp] === 'string')
        {
            if(!$("#" + comp).length>0) 
            {
                var element = document.createElement("img");
                element.id = comp;
                element.src = options.src;
                element.style.width = options.width;
                element.style.height = options.height;
                element.style.position = options.position;
                element.style.opacity = options.opacity;
                element.style.paddingLeft = options.paddingLeft;
                
                //append the element
                $(".banner").append(element);            

            }
        }
        
    }
}
 
 
function clearImage(comp)
{
    comp = comp.toString().toLowerCase().replace(" ", "");
    
    if(computers.hasOwnProperty(comp))
    {
        if(typeof computers[comp] === 'string')
        {
            if($("#" + comp).length>0) 
                $("#" + comp).remove();
        }
    }
        

}
   

    
    
        
