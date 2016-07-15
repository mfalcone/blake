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
                        text: 'Athletic Projects',
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
                        text: 'Dining Commons',
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
                        text: 'MacMillan Performing Arts Center',
                        fontSize: 14,                         
                        align: 'center'            
                    }        
                }    ,
            //------------------------------------------
  
            
                {
                    //==================================
                    // Basic settings
                    //==================================
                    name        : '4',
                    naming_opp  : 'cafeteria-building/b.bookstore.html',                    
                    external_link: 'dining-hall.php',
                    pointer_pos : [979.5, 492.0],
                    sceneFunc: function(ctx) 
                    {
                        ctx.moveTo(903.8, 492.6);
      ctx.lineTo(971.7, 470.3);
      ctx.lineTo(979.9, 474.7);
      ctx.lineTo(1096.7, 435.1);
      ctx.lineTo(1093.4, 432.0);
      ctx.lineTo(1138.1, 417.2);
      ctx.lineTo(1190.5, 442.5);
      ctx.lineTo(1190.5, 456.5);
      ctx.lineTo(1146.5, 481.5);
      ctx.lineTo(1146.5, 484.5);
      ctx.lineTo(1123.5, 492.5);
      ctx.lineTo(1123.5, 498.5);
      ctx.lineTo(1109.6, 503.8);
      ctx.lineTo(1109.1, 511.8);
      ctx.lineTo(1118.4, 518.1);
      ctx.lineTo(1117.6, 520.0);
      ctx.lineTo(1076.6, 535.4);
      ctx.lineTo(1074.1, 534.3);
      ctx.lineTo(1015.3, 556.8);
      ctx.lineTo(1013.7, 558.2);
      ctx.lineTo(987.6, 567.6);
      ctx.lineTo(987.0, 569.5);
      ctx.lineTo(968.9, 576.9);
      ctx.lineTo(944.4, 559.6);
      ctx.lineTo(885.6, 581.0);
      ctx.lineTo(879.3, 576.9);
      ctx.lineTo(876.0, 579.1);
      ctx.lineTo(841.6, 552.7);
      ctx.lineTo(835.8, 554.6);
      ctx.lineTo(803.7, 529.6);
      ctx.lineTo(866.1, 508.5);
      ctx.lineTo(879.3, 508.7);
      ctx.lineTo(903.7, 499.1);
      ctx.lineTo(903.7, 499.1);
      ctx.lineTo(903.8, 492.6);
                    },
                    fill        : 'rgba(170,255,0,0.3)',
                    stroke      : '#456800',
                    strokeWidth : 1,     

                    //==================================
                    // Tooltip settings
                    //==================================
                    tooltip     : {                
                        text: 'Entry Hall',
                        fontSize: 14,                         
                        align: 'center'            
                    }        
                }    ,


            //------------------------------------------
  
            
                {
                    //==================================
                    // Basic settings
                    //==================================
                    name        : '5',
                    naming_opp  : 'cafeteria-building/b.bookstore.html',                    
                    external_link: 'dining-hall.php',
                    pointer_pos : [212.3, 558.6],
                    sceneFunc: function(ctx) 
                    {
                        ctx.moveTo(127.1, 454.6);
                        ctx.lineTo(208.3, 435.6);
                        ctx.lineTo(210.8, 439.6);
                        ctx.lineTo(231.5, 434.0);
                        ctx.lineTo(233.0, 436.1);
                        ctx.lineTo(253.8, 430.6);
                        ctx.lineTo(262.5, 442.5);
                        ctx.lineTo(271.1, 444.3);
                        ctx.lineTo(279.6, 447.6);
                        ctx.lineTo(303.0, 440.6);
                        ctx.lineTo(309.8, 448.1);
                        ctx.lineTo(310.8, 454.6);
                        ctx.lineTo(336.0, 486.5);
                        ctx.lineTo(349.1, 496.6);
                        ctx.lineTo(350.0, 502.0);
                        ctx.lineTo(360.5, 507.8);
                        ctx.lineTo(361.5, 516.6);
                        ctx.lineTo(372.1, 521.6);
                        ctx.lineTo(372.8, 531.1);
                        ctx.lineTo(383.8, 536.8);
                        ctx.lineTo(384.5, 547.1);
                        ctx.lineTo(396.1, 551.8);
                        ctx.lineTo(397.5, 563.1);
                        ctx.lineTo(409.3, 569.0);
                        ctx.lineTo(410.5, 579.5);
                        ctx.lineTo(424.1, 585.8);
                        ctx.lineTo(424.5, 596.3);
                        ctx.lineTo(438.1, 602.6);
                        ctx.lineTo(439.3, 614.8);
                        ctx.lineTo(453.8, 621.8);
                        ctx.lineTo(453.5, 633.6);
                        ctx.lineTo(469.6, 641.8);
                        ctx.lineTo(469.3, 646.6);
                        ctx.lineTo(473.1, 650.6);
                        ctx.lineTo(478.5, 677.3);
                        ctx.lineTo(450.0, 687.5);
                        ctx.lineTo(449.6, 690.3);
                        ctx.lineTo(416.1, 702.1);
                        ctx.lineTo(412.2, 698.6);
                        ctx.lineTo(249.6, 755.0);
                        ctx.lineTo(250.8, 760.3);
                        ctx.lineTo(209.6, 774.1);
                        ctx.lineTo(207.6, 772.0);
                        ctx.lineTo(173.6, 783.8);
                        ctx.lineTo(166.8, 768.1);
                        ctx.lineTo(162.5, 754.5);
                        ctx.lineTo(148.0, 759.8);
                        ctx.lineTo(145.0, 748.0);
                        ctx.lineTo(157.1, 731.1);
                        ctx.lineTo(156.1, 729.0);
                        ctx.lineTo(138.8, 735.6);
                        ctx.lineTo(135.5, 725.0);
                        ctx.lineTo(147.3, 708.1);
                        ctx.lineTo(146.5, 706.6);
                        ctx.lineTo(130.1, 712.3);
                        ctx.lineTo(126.8, 701.8);
                        ctx.lineTo(138.1, 685.1);
                        ctx.lineTo(137.1, 684.1);
                        ctx.lineTo(120.6, 690.1);
                        ctx.lineTo(117.5, 680.6);
                        ctx.lineTo(128.8, 665.3);
                        ctx.lineTo(127.5, 663.6);
                        ctx.lineTo(112.0, 668.8);
                        ctx.lineTo(109.5, 659.0);
                        ctx.lineTo(119.0, 643.8);
                        ctx.lineTo(104.5, 648.8);
                        ctx.lineTo(101.1, 638.6);
                        ctx.lineTo(110.5, 626.1);
                        ctx.lineTo(109.6, 625.0);
                        ctx.lineTo(97.1, 629.5);
                        ctx.lineTo(93.8, 619.8);
                        ctx.lineTo(102.6, 608.3);
                        ctx.lineTo(102.0, 606.3);
                        ctx.lineTo(89.3, 610.6);
                        ctx.lineTo(86.8, 600.6);
                        ctx.lineTo(94.8, 591.1);
                        ctx.lineTo(82.5, 592.6);
                        ctx.lineTo(79.0, 583.3);
                        ctx.lineTo(87.0, 572.6);
                        ctx.lineTo(86.0, 572.1);
                        ctx.lineTo(75.5, 575.5);
                        ctx.lineTo(72.3, 566.3);
                        ctx.lineTo(84.1, 551.6);
                        ctx.lineTo(75.8, 529.3);
                        ctx.lineTo(92.1, 505.6);
                        ctx.lineTo(80.6, 474.1);
                        ctx.lineTo(106.1, 468.1);
                        ctx.lineTo(105.3, 462.6);
                        ctx.lineTo(126.8, 457.8);
                        ctx.lineTo(127.1, 454.6);
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
