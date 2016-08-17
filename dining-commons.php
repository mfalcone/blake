<!DOCTYPE HTML>
<html>
<head>
    <?php include('metas.php'); ?>

    <script type="text/javascript">

        // current background image located on images/floorplans/[big-medium-small]
        current_bg_name = 'dining';            
        
        var AreasSettingsList = 
            [
               

                //==================================
                //####### TITLE #######
                //==================================
                {
                    name        : '1',
                    naming_opp  : 'dining-commons/dc-1m.html',
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
                        text: '<span>$1M</span>',
                        fontSize: 16,
                        align: 'center'            
                    }        
                }    , 

                 {
                    //==================================
                    // Basic settings
                    //==================================
                    name        : '2',
                    naming_opp  : 'dining-commons/a.admissions-office.html',
                    pointer_pos : [885.1, 778.0],
                    sceneFunc: function(ctx) 
                    {
                        ctx.moveTo(851.0, 748.5);
                        ctx.lineTo(928.5, 748.5);
                        ctx.lineTo(928.5, 824.5);
                        ctx.lineTo(851.0, 824.5);
                        ctx.lineTo(851.0, 748.5);
                        
                    },
                    fill        : 'rgba(170,255,0,0.3)',
                    stroke      : '#456800',
                    strokeWidth : 1,        

                    //==================================
                    // Tooltip settings
                    //==================================
                    tooltip     : {                
                        text: 'Admissions Office',
                        fontSize: 14,                         
                        align: 'center'            
                    }        
                }    ,
                //==================================
                //####### TITLE #######
                //==================================
                {
                    name        : '3',
                    naming_opp  : 'dining-commons/dc-100.html',
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
                        text: '<span>$100</span>',
                        fontSize: 16,
                        align: 'center'            
                    }        
                }    , 

                 {
                    //==================================
                    // Basic settings
                    //==================================
                    name        : '4',
                    naming_opp  : 'dining-commons/b.director-of-admissions-finance.html',
                    pointer_pos : [1034.1, 808.0],
                    sceneFunc: function(ctx) 
                    {
                        ctx.moveTo(1006.5, 785.5);
                        ctx.lineTo(1073.5, 785.5);
                        ctx.lineTo(1073.5, 824.5);
                        ctx.lineTo(1006.5, 824.5);
                        ctx.lineTo(1006.5, 785.5);
                        
                    },
                    fill        : 'rgba(170,255,0,0.3)',
                    stroke      : '#456800',
                    strokeWidth : 1,        

                    //==================================
                    // Tooltip settings
                    //==================================
                    tooltip     : {                
                        text: 'Director of Admissions & Finance',
                        fontSize: 14,                         
                        align: 'center'            
                    }        
                }    ,

                {
                    //==================================
                    // Basic settings
                    //==================================
                    name        : '4-1',
                    naming_opp  : 'dining-commons/c.culinary-center.html',
                    pointer_pos : [1110.5, 440.0],
                    sceneFunc: function(ctx) 
                    {
                        ctx.moveTo(984.5, 375.5);
                        ctx.lineTo(1275.5, 375.5);
                        ctx.lineTo(1275.5, 491.5);
                        ctx.lineTo(984.5, 491.5);
                        ctx.lineTo(984.5, 375.5);
                        
                    },
                    fill        : 'rgba(170,255,0,0.3)',
                    stroke      : '#456800',
                    strokeWidth : 1,        

                    //==================================
                    // Tooltip settings
                    //==================================
                    tooltip     : {                
                        text: 'Culinary Center',
                        fontSize: 14,                         
                        align: 'center'            
                    }        
                }    ,
                //==================================
                //####### TITLE #######
                //==================================
                {
                    name        : '5',
                    naming_opp  : 'dining-commons/dc-75.html',
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
                        text: '<span>$75</span>',
                        fontSize: 16,
                        align: 'center'            
                    }        
                }    , 

                 {
                    //==================================
                    // Basic settings
                    //==================================
                    name        : '6',
                    naming_opp  : 'dining-commons/d.director-of-financial-assistance.html',
                    pointer_pos : [1100.5, 810.0],
                    sceneFunc: function(ctx) 
                    {
                        ctx.moveTo(1073.5, 787.5);
                        ctx.lineTo(1137.5, 787.5);
                        ctx.lineTo(1137.5, 832.5);
                        ctx.lineTo(1073.5, 832.5);
                        ctx.lineTo(1073.5, 787.5);
                        
                    },
                    fill        : 'rgba(170,255,0,0.3)',
                    stroke      : '#456800',
                    strokeWidth : 1,        

                    //==================================
                    // Tooltip settings
                    //==================================
                    tooltip     : {                
                        text: 'Director of Financial Assistance',
                        fontSize: 14,                         
                        align: 'center'            
                    }        
                }    ,

                {
                    //==================================
                    // Basic settings
                    //==================================
                    name        : '6-1',
                    naming_opp  : 'dining-commons/e.commons-stairways.html',
                    pointer_pos : [942.5, 485.0],
                    sceneFunc: function(ctx) 
                    {
                        ctx.moveTo(926.5, 439.5);
                        ctx.lineTo(956.5, 439.5);
                        ctx.lineTo(956.5, 515.5);
                        ctx.lineTo(926.5, 515.5);
                        ctx.lineTo(926.5, 439.5);
                        
                    },
                    fill        : 'rgba(170,255,0,0.3)',
                    stroke      : '#456800',
                    strokeWidth : 1,        

                    //==================================
                    // Tooltip settings
                    //==================================
                    tooltip     : {                
                        text: 'Commons Stairways',
                        fontSize: 14,                         
                        align: 'center'            
                    }        
                }    ,
                //==================================
                //####### TITLE #######
                //==================================
                {
                    name        : '7',
                    naming_opp  : 'dining-commons/dc-25.html',
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
                        text: '<span>$25</span>',
                        fontSize: 16,
                        align: 'center'            
                    }        
                }    , 

                 {
                    //==================================
                    // Basic settings
                    //==================================
                    name        : '8',
                    naming_opp  : 'dining-commons/f.admissions-coordinator-offices.html',
                    pointer_pos : [970.5, 810.0],
                    sceneFunc: function(ctx) 
                    {
                        ctx.moveTo(929.5, 787.5);
                        ctx.lineTo(1007.5, 787.5);
                        ctx.lineTo(1007.5, 823.5);
                        ctx.lineTo(929.5, 823.5);
                        ctx.lineTo(929.5, 787.5);
                        
                    },
                    fill        : 'rgba(170,255,0,0.3)',
                    stroke      : '#456800',
                    strokeWidth : 1,        

                    //==================================
                    // Tooltip settings
                    //==================================
                    tooltip     : {                
                        text: 'Admissions Coordinator Offices',
                        fontSize: 14,                         
                        align: 'center'            
                    }        
                }    ,
                //==================================
                //####### TITLE #######
                //==================================
                {
                    name        : '9',
                    naming_opp  : 'dining-commons/dc-5m.html',
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
                        text: '<span>$5M</span>',
                        fontSize: 16,
                        align: 'center'            
                    }        
                }    , 

                 {
                    //==================================
                    // Basic settings
                    //==================================
                    name        : '10',
                    naming_opp  : 'dining-commons/g.dining-commons-ulitpurpose-room.html',
                    pointer_pos : [1100.5, 250.0],
                    sceneFunc: function(ctx) 
                    {
                        ctx.moveTo(928.5, 190.5);
                        ctx.lineTo(1313.5, 190.5);
                        ctx.lineTo(1313.5, 311.5);
                        ctx.lineTo(928.5, 311.5);
                        ctx.lineTo(928.5, 184.5);
                        
                    },
                    fill        : 'rgba(170,255,0,0.3)',
                    stroke      : '#456800',
                    strokeWidth : 1,        

                    //==================================
                    // Tooltip settings
                    //==================================
                    tooltip     : {                
                        text: 'Dining Commons /Mulitpurpose Room',
                        fontSize: 14,                         
                        align: 'center'            
                    }        
                }    ,
                //==================================
                //####### TITLE #######
                //==================================
                {
                    name        : '11',
                    naming_opp  : 'dining-commons/dc-500.html',
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
                        text: '<span>$500</span>',
                        fontSize: 16,
                        align: 'center'            
                    }        
                }    , 

                 {
                    //==================================
                    // Basic settings
                    //==================================
                    name        : '10',
                    naming_opp  : 'dining-commons/h.outdoor-dining-plaza.html',
                    pointer_pos : [1100.5, 190.0],
                    sceneFunc: function(ctx) 
                    {
                        ctx.moveTo(928.5, 155.5);
                        ctx.lineTo(1315.5, 155.5);
                        ctx.lineTo(1315.5, 190.5);
                        ctx.lineTo(928.5, 190.5);
                        ctx.lineTo(928.5, 155.5);
                        
                    },
                    fill        : 'rgba(170,255,0,0.3)',
                    stroke      : '#456800',
                    strokeWidth : 1,        

                    //==================================
                    // Tooltip settings
                    //==================================
                    tooltip     : {                
                        text: 'Outdoor Dining Plaza',
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
