<!DOCTYPE HTML>
<html>
<head>
    <?php include('metas.php'); ?>

    <script type="text/javascript">

        // current background image located on images/floorplans/[big-medium-small]
        current_bg_name = 'entry-hall';            
        
        var AreasSettingsList = 
            [
               
                //==================================
                //####### TITLE #######
                //==================================
                {
                    name        : '5',
                    naming_opp  : 'entry-hall/eh-5m.html',
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
                    name        : '6',
                    naming_opp  : 'entry-hall/c.entry-hall.html',
                    pointer_pos : [870.0, 410.0],
                    sceneFunc: function(ctx) 
                    {
                        ctx.moveTo(548.0, 362.0);
                        ctx.lineTo(1203.3, 362.0);
                        ctx.lineTo(1203.3, 455.0);
                        ctx.lineTo(548.0, 455.0);
                        ctx.lineTo(548.0, 362.0);
                        
                          
                    },
                    fill        : 'rgba(170,255,0,0.3)',
                    stroke      : '#456800',
                    strokeWidth : 1,        

                    //==================================
                    // Tooltip settings
                    //==================================
                    tooltip     : {                
                        text: ' Entry Hall',
                        fontSize: 14,                         
                        align: 'center'            
                    }        
                }    ,
                //==================================
                //####### TITLE #######
                //==================================
                {
                    name        : '1',
                    naming_opp  : 'entry-hall/eh-500.html',
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
                    name        : '2',
                    naming_opp  : 'entry-hall/a.drop-off-circle.html',
                    pointer_pos : [955.1, 618.0],
                    sceneFunc: function(ctx) 
                    {
                        ctx.moveTo(869.5, 566.0);
                          ctx.lineTo(1158.4, 566.0);
                          ctx.lineTo(1158.4, 696.5);
                          ctx.lineTo(682.5, 696.5);
                          ctx.lineTo(681.5, 588.5);
                          ctx.lineTo(840.9, 587.6);
                          ctx.lineTo(869.5, 559.0);
                          ctx.lineTo(869.5, 566.0);
                    },
                    fill        : 'rgba(170,255,0,0.3)',
                    stroke      : '#456800',
                    strokeWidth : 1,        

                    //==================================
                    // Tooltip settings
                    //==================================
                    tooltip     : {                
                        text: 'Drop Off Circle',
                        fontSize: 14,                         
                        align: 'center'            
                    }        
                }    ,
                
                
                
                //==================================
                //####### TITLE #######
                //==================================
                {
                    name        : '7',
                    naming_opp  : 'entry-hall/eh-250.html',
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
                        text: '<span>$250,000</span>',
                        fontSize: 16,
                        align: 'center'            
                    }        
                }    , 

                 {
                    //==================================
                    // Basic settings
                    //==================================
                    name        : '8',
                    naming_opp  : 'entry-hall/d.student-lounge-in-entry-hall.html',
                    pointer_pos : [1135.0, 490.0],
                    sceneFunc: function(ctx) 
                    {
                        ctx.moveTo(1065.5, 451.3);
                          ctx.lineTo(1193.7, 451.3);
                          ctx.lineTo(1193.7, 513.5);
                          ctx.lineTo(1065.5, 513.5);
                          ctx.lineTo(1065.5, 451.3);
                        
                        
                          
                    },
                    fill        : 'rgba(170,255,0,0.3)',
                    stroke      : '#456800',
                    strokeWidth : 1,        

                    //==================================
                    // Tooltip settings
                    //==================================
                    tooltip     : {                
                        text: ' Student Lounge in Entry Hall',
                        fontSize: 14,                         
                        align: 'center'            
                    }        
                }    ,
                {
                    //==================================
                    // Basic settings
                    //==================================
                    name        : '9',
                    naming_opp  : 'entry-hall/d.student-lounge-in-entry-hall.html',
                    pointer_pos : [1250.0, 320.0],
                    sceneFunc: function(ctx) 
                    {
                        ctx.moveTo(1192.5, 284.3);
                          ctx.lineTo(1320.7, 284.3);
                          ctx.lineTo(1320.7, 350.5);
                          ctx.lineTo(1192.5, 350.5);
                          ctx.lineTo(1192.5, 284.3);
                        
                        
                          
                    },
                    fill        : 'rgba(170,255,0,0.3)',
                    stroke      : '#456800',
                    strokeWidth : 1,        

                    //==================================
                    // Tooltip settings
                    //==================================
                    tooltip     : {                
                        text: ' Student Lounge in Entry Hall (Reserved)',
                        fontSize: 14,                         
                        align: 'center'            
                    }        
                }    ,

                {
                    //==================================
                    // Basic settings
                    //==================================
                    name        : '10',
                    naming_opp  : 'entry-hall/e.exterior-fireplace-plaza.html',
                    pointer_pos : [1250.0, 240.0],
                    sceneFunc: function(ctx) 
                    {
                        ctx.moveTo(1185.5, 191.3);
                          ctx.lineTo(1318.7, 191.3);
                          ctx.lineTo(1318.7, 282.5);
                          ctx.lineTo(1185.5, 282.5);
                          ctx.lineTo(1185.5, 191.3);
                    },
                    fill        : 'rgba(170,255,0,0.3)',
                    stroke      : '#456800',
                    strokeWidth : 1,        

                    //==================================
                    // Tooltip settings
                    //==================================
                    tooltip     : {                
                        text: 'Exterior Fireplace/Plaza (Reserved)',
                        fontSize: 14,                         
                        align: 'center'            
                    }        
                }    ,
                //==================================
                //####### TITLE #######
                //==================================
                {
                    name        : '3',
                    naming_opp  : 'entry-hall/eh-100.html',
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
                    name        : '4',
                    naming_opp  : 'entry-hall/b.welcome-security-desk.html',
                    pointer_pos : [760.1, 510.0],
                    sceneFunc: function(ctx) 
                    {
                        ctx.moveTo(722.5, 451.7);
                          ctx.lineTo(786.2, 451.7);
                          ctx.lineTo(786.2, 561.5);
                          ctx.lineTo(722.5, 561.5);
                          ctx.lineTo(722.5, 451.7);
                          
                    },
                    fill        : 'rgba(170,255,0,0.3)',
                    stroke      : '#456800',
                    strokeWidth : 1,        

                    //==================================
                    // Tooltip settings
                    //==================================
                    tooltip     : {                
                        text: ' Welcome/Security Desk',
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
