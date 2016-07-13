<!DOCTYPE HTML>
<html>
<head>
    <?php include('metas.php'); ?>

    <script type="text/javascript">

        // current background image located on images/floorplans/[big-medium-small]
        current_bg_name = '3d';            
        
        var AreasSettingsList = 
            [
                {
                    //==================================
                    // Basic settings
                    //==================================
                    name        : '1',
                    naming_opp  : 'cafeteria-building/b.bookstore.html',
                    external_link: 'performing-arts-main-level.php',
                    pointer_pos : [443.2, 312.2],
                    sceneFunc: function(ctx) 
                    {
                        ctx.moveTo(255.66, 255.0);
      ctx.lineTo(529.6, 206.3);
      ctx.lineTo(689.6, 303.0);
      ctx.lineTo(438.3, 361.0);
      ctx.lineTo(444.3, 403.3);
      ctx.lineTo(407.6, 413.6);
      ctx.lineTo(257.0, 266.3);
      ctx.lineTo(255.66, 255.0);
                    },
                    fill        : 'rgba(170,255,0,0.3)',
                    stroke      : '#456800',
                    strokeWidth : 1,     

                    //==================================
                    // Tooltip settings
                    //==================================
                    tooltip     : {                
                        text: 'Performing Arts',
                        fontSize: 14,                         
                        align: 'center'            
                    }        
                }    ,
            //------------------------------------------
            
                {
                    //==================================
                    // Basic settings
                    //==================================
                    name        : '2',
                    naming_opp  : 'cafeteria-building/b.bookstore.html',
                    external_link: 'athletics.php',
                    pointer_pos : [805.0, 284],
                    sceneFunc: function(ctx) 
                    {
                        ctx.moveTo(719.0, 287.0);
      ctx.lineTo(861.3, 254.0);
      ctx.lineTo(897.0, 270.3);
      ctx.lineTo(897.0, 272.3);
      ctx.lineTo(893.3, 273.3);
      ctx.lineTo(901.6, 276.6);
      ctx.lineTo(738.0, 316.3);
      ctx.lineTo(728.6, 311.3);
      ctx.lineTo(728.6, 293.3);
      ctx.lineTo(719.0, 287.0);
                    },
                    fill        : 'rgba(170,255,0,0.3)',
                    stroke      : '#456800',
                    strokeWidth : 1,     

                    //==================================
                    // Tooltip settings
                    //==================================
                    tooltip     : {                
                        text: 'Athletics',
                        fontSize: 14,                         
                        align: 'center'            
                    }        
                }    ,
            //------------------------------------------
            
                {
                    //==================================
                    // Basic settings
                    //==================================
                    name        : '3',
                    naming_opp  : 'cafeteria-building/b.bookstore.html',                    
                    external_link: 'dining-hall.php',
                    pointer_pos : [873.6, 428.6],
                    sceneFunc: function(ctx) 
                    {
                        ctx.moveTo(900.0, 397.3);
      ctx.lineTo(929.0, 414.3);
      ctx.lineTo(976.0, 419.0);
      ctx.lineTo(985.3, 423.6);
      ctx.lineTo(985.6, 443.0);
      ctx.lineTo(970.6, 469.0);
      ctx.lineTo(902.6, 491.6);
      ctx.lineTo(902.6, 500.6);
      ctx.lineTo(878.6, 508.6);
      ctx.lineTo(864.3, 508.6);
      ctx.lineTo(829.0, 521.3);
      ctx.lineTo(828.0, 496.0);
      ctx.lineTo(807.3, 483.6);
      ctx.lineTo(805.3, 425.0);
      ctx.lineTo(900.0, 397.3);
                    },
                    fill        : 'rgba(170,255,0,0.3)',
                    stroke      : '#456800',
                    strokeWidth : 1,     

                    //==================================
                    // Tooltip settings
                    //==================================
                    tooltip     : {                
                        text: 'Cafeteria',
                        fontSize: 14,                         
                        align: 'center'            
                    }        
                }    ,
            //------------------------------------------
  
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
