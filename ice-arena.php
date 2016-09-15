<!DOCTYPE HTML>
<html>
<head>
    <?php include('metas.php'); ?>

    <script type="text/javascript">

        // current background image located on images/floorplans/[big-medium-small]
        current_bg_name = 'ice-arena';            
        
        var AreasSettingsList = [


                //==================================
                //####### TITLE #######
                //==================================
                {
                    name        : '1',
                    naming_opp  : 'ice-arena/999.html',
                    pointer_pos : [9999, 9999],
                    first_point : [9999, 9999],
                    sceneFunc: function(ctx) 
                    {
                       ctx.moveTo(0,0);
                      ctx.lineTo(0,0);
                    }
                        ,
                    fill        : 'rgba(0,0,0,0)',
                    stroke      : '#000000',
                    strokeWidth : 0,

                    //==================================
                    // Tooltip settings
                    //==================================
                    tooltip     : {                
                        text: '<span>$5,000,000</span>',
                        fontSize: 16,
                        align: 'center'            
                    }        
                }    , 

                 {
                    //==================================
                    // Basic settings
                    //==================================
                    name        : '2',
                    naming_opp  : 'ice-arena/contact.html',
                    pointer_pos : [9999, 9999],
                     sceneFunc: function(ctx) 
                    {
                       ctx.moveTo(0,0);
                      ctx.lineTo(0,0);
                    },
                    fill        : 'rgba(170,255,0,0.3)',
                    stroke      : '#456800',
                    strokeWidth : 1,        

                    //==================================
                    // Tooltip settings
                    //==================================
                    tooltip     : {                
                        text: 'Ice Arena',
                        fontSize: 14,                         
                        align: 'center'            
                    }        
                }    ,
                //==================================
                //####### TITLE #######
                //==================================
                {
                    name        : '3',
                    naming_opp  : 'ice-arena/999.html',
                    pointer_pos : [9999, 9999],
                    first_point : [9999, 9999],
                    sceneFunc: function(ctx) 
                    {
                       ctx.moveTo(0,0);
                      ctx.lineTo(0,0);
                    }
                        ,
                    fill        : 'rgba(0,0,0,0)',
                    stroke      : '#000000',
                    strokeWidth : 0,

                    //==================================
                    // Tooltip settings
                    //==================================
                    tooltip     : {                
                        text: '<span>$1,000,000</span>',
                        fontSize: 16,
                        align: 'center'            
                    }        
                }    , 

                 {
                    //==================================
                    // Basic settings
                    //==================================
                    name        : '4',
                    naming_opp  : 'ice-arena/contact.html',
                    pointer_pos : [9999, 9999],
                   sceneFunc: function(ctx) 
                    {
                       ctx.moveTo(0,0);
                      ctx.lineTo(0,0);
                    },
                    fill        : 'rgba(170,255,0,0.3)',
                    stroke      : '#456800',
                    strokeWidth : 1,        

                    //==================================
                    // Tooltip settings
                    //==================================
                    tooltip     : {                
                        text: 'Ice surface',
                        fontSize: 14,                         
                        align: 'center'            
                    }        
                }    ,
                //==================================
                //####### TITLE #######
                //==================================
                {
                    name        : '5',
                    naming_opp  : 'ice-arena/999.html',
                    pointer_pos : [9999, 9999],
                    first_point : [9999, 9999],
                    sceneFunc: function(ctx) 
                    {
                       ctx.moveTo(0,0);
                      ctx.lineTo(0,0);
                    }
                        ,
                    fill        : 'rgba(0,0,0,0)',
                    stroke      : '#000000',
                    strokeWidth : 0,

                    //==================================
                    // Tooltip settings
                    //==================================
                    tooltip     : {                
                        text: '<span>$500,000</span>',
                        fontSize: 16,
                        align: 'center'            
                    }        
                }    , 

                 {
                    //==================================
                    // Basic settings
                    //==================================
                    name        : '6',
                    naming_opp  : 'ice-arena/contact.html',
                    pointer_pos : [9999, 9999],
                    sceneFunc: function(ctx) 
                    {
                       ctx.moveTo(0,0);
                      ctx.lineTo(0,0);
                    },
                    fill        : 'rgba(170,255,0,0.3)',
                    stroke      : '#456800',
                    strokeWidth : 1,        

                    //==================================
                    // Tooltip settings
                    //==================================
                    tooltip     : {                
                        text: 'Entranceway',
                        fontSize: 14,                         
                        align: 'center'            
                    }        
                }    ,
                //==================================
                //####### TITLE #######
                //==================================
                {
                    name        : '7',
                    naming_opp  : 'ice-arena/999.html',
                    pointer_pos : [9999, 9999],
                    first_point : [9999, 9999],
                    sceneFunc: function(ctx) 
                    {
                       ctx.moveTo(0,0);
                      ctx.lineTo(0,0);
                    }
                        ,
                    fill        : 'rgba(0,0,0,0)',
                    stroke      : '#000000',
                    strokeWidth : 0,

                    //==================================
                    // Tooltip settings
                    //==================================
                    tooltip     : {                
                        text: '<span>$250,000/each</span>',
                        fontSize: 16,
                        align: 'center'            
                    }        
                }    , 

                 {
                    //==================================
                    // Basic settings
                    //==================================
                    name        : '8',
                    naming_opp  : 'ice-arena/contact.html',
                    pointer_pos : [9999, 9999],
                    sceneFunc: function(ctx) 
                    {
                       ctx.moveTo(0,0);
                      ctx.lineTo(0,0);
                    },
                    fill        : 'rgba(170,255,0,0.3)',
                    stroke      : '#456800',
                    strokeWidth : 1,        

                    //==================================
                    // Tooltip settings
                    //==================================
                    tooltip     : {                
                        text: 'Locker Rooms (8 available)',
                        fontSize: 14,                         
                        align: 'center'            
                    }        
                }    ,
                //==================================
                //####### TITLE #######
                //==================================
                {
                    name        : '9',
                    naming_opp  : 'ice-arena/999.html',
                    pointer_pos : [9999, 9999],
                    first_point : [9999, 9999],
                    sceneFunc: function(ctx) 
                    {
                       ctx.moveTo(0,0);
                      ctx.lineTo(0,0);
                    }
                        ,
                    fill        : 'rgba(0,0,0,0)',
                    stroke      : '#000000',
                    strokeWidth : 0,

                    //==================================
                    // Tooltip settings
                    //==================================
                    tooltip     : {                
                        text: '<span>$100,000</span>',
                        fontSize: 16,
                        align: 'center'            
                    }        
                }    , 

                 {
                    //==================================
                    // Basic settings
                    //==================================
                    name        : '10',
                    naming_opp  : 'ice-arena/contact.html',
                    pointer_pos : [9999, 9999],
                    sceneFunc: function(ctx) 
                    {
                       ctx.moveTo(0,0);
                      ctx.lineTo(0,0);
                    },
                    fill        : 'rgba(170,255,0,0.3)',
                    stroke      : '#456800',
                    strokeWidth : 1,        

                    //==================================
                    // Tooltip settings
                    //==================================
                    tooltip     : {                
                        text: 'Concessions Stand',
                        fontSize: 14,                         
                        align: 'center'            
                    }        
                }    ,
                 {
                    //==================================
                    // Basic settings
                    //==================================
                    name        : '11',
                    naming_opp  : 'ice-arena/contact.html',
                    pointer_pos : [9999, 9999],
                    sceneFunc: function(ctx) 
                    {
                       ctx.moveTo(0,0);
                      ctx.lineTo(0,0);
                    },
                    fill        : 'rgba(170,255,0,0.3)',
                    stroke      : '#456800',
                    strokeWidth : 1,        

                    //==================================
                    // Tooltip settings
                    //==================================
                    tooltip     : {                
                        text: 'Ticket Booth',
                        fontSize: 14,                         
                        align: 'center'            
                    }        
                }    ,
                {
                    //==================================
                    // Basic settings
                    //==================================
                    name        : '12',
                    naming_opp  : 'ice-arena/contact.html',
                    pointer_pos : [9999, 9999],
                    sceneFunc: function(ctx) 
                    {
                       ctx.moveTo(0,0);
                      ctx.lineTo(0,0);
                    },
                    fill        : 'rgba(170,255,0,0.3)',
                    stroke      : '#456800',
                    strokeWidth : 1,        

                    //==================================
                    // Tooltip settings
                    //==================================
                    tooltip     : {                
                        text: 'Scoreboard (2 available)',
                        fontSize: 14,                         
                        align: 'center'            
                    }        
                }    ,
        ];

    </script>                    
    <script defer="defer" src="js/app.js"></script>

</head>
<body>
    <div id="container"></div>

    <?php include('overlays.php'); ?>

    <div class="ancho brd_50"></div>

    <?php include('header.php'); ?>

    <?php include('menu-mobile.php'); ?>        

    <?php include('sidebar-areas.php'); ?> 

    <?php include('zoom-controls.php'); ?> 

    <!--wrapper -->
    <div id="wrapper">
        <div class="_r">
            <div class="_f _fN"></div>
        </div>
    </div>
    <!--end wrapper -->
</body>
</html>
