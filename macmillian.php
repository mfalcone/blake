<!DOCTYPE HTML>
<html>
<head>
    <?php include('metas.php'); ?>

    <script type="text/javascript">

        // current background image located on images/floorplans/[big-medium-small]
        current_bg_name = 'mpac';            
        
        var AreasSettingsList = 
            [
                //==================================
                //####### TITLE #######
                //==================================
                {
                    name        : '110',
                    naming_opp  : 'mpac/dnd-500.html',
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
                    name        : '10',
                    naming_opp  : 'mpac/b.north-south-gallery.html',
                    pointer_pos : [1370, 338.0],
                    sceneFunc: function(ctx) 
                    {
                        ctx.moveTo(1336.0, 135.3);
                          ctx.lineTo(1399.3, 135.3);
                          ctx.lineTo(1399.3, 545.0);
                          ctx.lineTo(1336.0, 545.0);
                          ctx.lineTo(1336.0, 135.3);
                      },
                    fill        : 'rgba(170,255,0,0.3)',
                    stroke      : '#456800',
                    strokeWidth : 1,        

                    //==================================
                    // Tooltip settings
                    //==================================
                    tooltip     : {                
                        text: 'North/South Gallery',
                        fontSize: 14,                         
                        align: 'center'            
                    }        
                }    ,
                {
                    //==================================
                    // Basic settings
                    //==================================
                    name        : '8',
                    naming_opp  : 'mpac/f.stage.html',
                    pointer_pos : [660.1, 500.0],
                    sceneFunc: function(ctx) 
                    {
                        ctx.moveTo(527.0, 411.6);
                          ctx.lineTo(776.5, 411.0);
                          ctx.lineTo(776.5, 442.3);
                          ctx.lineTo(794.7, 446.3);
                          ctx.lineTo(790.3, 531.0);
                          ctx.lineTo(763.6, 530.3);
                          ctx.lineTo(703.0, 580.3);
                          ctx.lineTo(613.6, 580.3);
                          ctx.lineTo(613.6, 581.3);
                          ctx.lineTo(552.0, 530.5);
                          ctx.lineTo(528.3, 538.5);
                          ctx.lineTo(527.0, 411.6);
                    },
                    fill        : 'rgba(170,255,0,0.3)',
                    stroke      : '#456800',
                    strokeWidth : 1,        

                    //==================================
                    // Tooltip settings
                    //==================================
                    tooltip     : {                
                        text: 'Stage',
                        fontSize: 14,                         
                        align: 'center'            
                    }        
                }    ,

                 //==================================
                //####### TITLE #######
                //==================================
                {
                    name        : '100',
                    naming_opp  : 'mpac/dnd-50.html',
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
                        text: '<span>$50,000</span>',
                        fontSize: 16,
                        align: 'center'            
                    }        
                }    , 

                 {
                    //==================================
                    // Basic settings
                    //==================================
                    name        : '8',
                    naming_opp  : 'mpac/c.green-room.html',
                    pointer_pos : [620.1, 340.0],
                    sceneFunc: function(ctx) 
                    {
                        ctx.moveTo(507.0, 270.5);
                          ctx.lineTo(731.5, 270.5);
                          ctx.lineTo(731.5, 406.5);
                          ctx.lineTo(506.0, 406.5);
                          ctx.lineTo(507.0, 270.5);
                    },
                    fill        : 'rgba(170,255,0,0.3)',
                    stroke      : '#456800',
                    strokeWidth : 1,        

                    //==================================
                    // Tooltip settings
                    //==================================
                    tooltip     : {                
                        text: 'Green Room',
                        fontSize: 14,                         
                        align: 'center'            
                    }        
                }    ,


                 {
                    //==================================
                    // Basic settings
                    //==================================
                    name        : '9',
                    naming_opp  : 'mpac/d.wing-space-scene-shop.html',
                    pointer_pos : [850.1, 480.0],
                    sceneFunc: function(ctx) 
                    {
                        ctx.moveTo(813.4, 314.5);
                          ctx.lineTo(906.5, 314.5);
                          ctx.lineTo(905.6, 607.0);
                          ctx.lineTo(857.0, 549.6);
                          ctx.lineTo(856.3, 522.5);
                          ctx.lineTo(813.0, 522.5);
                          ctx.lineTo(813.4, 314.5);
                          
                    },
                    fill        : 'rgba(170,255,0,0.3)',
                    stroke      : '#456800',
                    strokeWidth : 1,        

                    //==================================
                    // Tooltip settings
                    //==================================
                    tooltip     : {                
                        text: 'Wing Space/Scene Shop',
                        fontSize: 14,                         
                        align: 'center'            
                    }        
                }    ,
            
                //==================================
                //####### TITLE #######
                //==================================
                {
                    name        : '101',
                    naming_opp  : 'mpac/dnd-25.html',
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
                        text: '<span>$25,000</span>',
                        fontSize: 16,
                        align: 'center'            
                    }        
                }    , 

                 {
                    //==================================
                    // Basic settings
                    //==================================
                    name        : '7',
                    naming_opp  : 'mpac/e.dressing-room-1.html',
                    pointer_pos : [700.1, 215.0],
                    sceneFunc: function(ctx) 
                    {
                        ctx.moveTo(654.5, 149.7);
                          ctx.lineTo(753.4, 149.5);
                          ctx.lineTo(753.9, 269.5);
                          ctx.lineTo(654.5, 269.5);
                          ctx.lineTo(654.5, 149.7);
                    },
                    fill        : 'rgba(170,255,0,0.3)',
                    stroke      : '#456800',
                    strokeWidth : 1,        

                    //==================================
                    // Tooltip settings
                    //==================================
                    tooltip     : {                
                        text: 'Dressing Room',
                        fontSize: 14,                         
                        align: 'center'            
                    }        
                }    ,
                //==================================
                //####### TITLE #######
                //==================================
                {
                    name        : '105',
                    naming_opp  : 'mpac/dnd-5000.html',
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
                        text: '<span>$5,000</span>',
                        fontSize: 16,
                        align: 'center'            
                    }        
                }    , 

                 {
                    //==================================
                    // Basic settings
                    //==================================
                    name        : '9',
                    naming_opp  : 'mpac/a.theaters-seats.html',
                    pointer_pos : [662.1, 630.0],
                    sceneFunc: function(ctx) 
                    {
                        ctx.moveTo(658.0, 642.9);
                          ctx.lineTo(667.1, 642.9);
                          ctx.lineTo(667.1, 652.8);
                          ctx.lineTo(657.0, 652.8);
                          ctx.lineTo(658.0, 642.4);
                    },
                    fill        : 'rgba(170,255,0,0.3)',
                    stroke      : '#456800',
                    strokeWidth : 1,        

                    //==================================
                    // Tooltip settings
                    //==================================
                    tooltip     : {                
                        text: 'Theater Seats',
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
