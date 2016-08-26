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
                    external_link: 'athletic-field.php',
                    pointer_pos : [445.2, 372.2],
                    sceneFunc: function(ctx) 
                    {
                        ctx.moveTo(385.5,471.5);
                        ctx.lineTo(354.375,480.625);
                        ctx.lineTo(217.438,343.312);
                        ctx.lineTo(116,363.5);
                        ctx.lineTo(104,363.5);
                        ctx.lineTo(83,335.5);
                        ctx.lineTo(89.5,331.5);
                        ctx.lineTo(335,290);
                        ctx.lineTo(348,291);
                        ctx.lineTo(381.5,313.5);
                        ctx.lineTo(458,300.5);
                        ctx.lineTo(600.5,384);
                        ctx.lineTo(382,434.5);
                        ctx.lineTo(385.5,471.5);

                        ctx.moveTo(680.167,248.333);
                        ctx.lineTo(758.167,256.5);
                        ctx.lineTo(759.667,258.667);
                        ctx.lineTo(701.833,293.5);
                        ctx.lineTo(697.667,287.167);
                        ctx.lineTo(694.333,286.333);
                        ctx.lineTo(692.333,286.5);
                        ctx.lineTo(690.333,288.833);
                        ctx.lineTo(686.167,289.333);
                        ctx.lineTo(683.167,288.167);
                        ctx.lineTo(680,289.833);
                        ctx.lineTo(676.5,289.667);
                        ctx.lineTo(675.167,292);
                        ctx.lineTo(675.5,294.167);
                        ctx.lineTo(672.667,296.5);
                        ctx.lineTo(673.167,298.5);
                        ctx.lineTo(672.833,300.667);
                        ctx.lineTo(671.5,303.167);
                        ctx.lineTo(672,305.333);
                        ctx.lineTo(671.667,309.167);
                        ctx.lineTo(670.833,312.5);
                        ctx.lineTo(663.5,311);
                        ctx.lineTo(665.667,307);
                        ctx.lineTo(664.833,305);
                        ctx.lineTo(663.5,303.167);
                        ctx.lineTo(663.167,300.5);
                        ctx.lineTo(661.833,297.167);
                        ctx.lineTo(660.167,294.333);
                        ctx.lineTo(657,291);
                        ctx.lineTo(653.167,289.333);
                        ctx.lineTo(649,289.5);
                        ctx.lineTo(646.167,290.167);
                        ctx.lineTo(643,290);
                        ctx.lineTo(642.833,288.333);
                        ctx.lineTo(639.667,285);
                        ctx.lineTo(635.333,282.333);
                        ctx.lineTo(631.667,282.167);
                        ctx.lineTo(627.167,282.667);
                        ctx.lineTo(623.833,284);
                        ctx.lineTo(621,288.167);
                        ctx.lineTo(617.333,285.333);
                        ctx.lineTo(616.167,282.667);
                        ctx.lineTo(611.833,282);
                        ctx.lineTo(680.167,248.333);
                        
                        ctx.moveTo(645.667,176);
                        ctx.lineTo(780.667,224.333);
                        ctx.lineTo(782.667,221.667);
                        ctx.lineTo(797.333,223);
                        ctx.lineTo(797.667,226.667);
                        ctx.lineTo(980.667,191.333);
                        ctx.lineTo(797.667,148);
                        ctx.lineTo(645.667,176);
                    },
                    fill        : 'rgba(170,255,0,0.3)',
                    stroke      : '#456800',
                    strokeWidth : 1,     

                    //==================================
                    // Tooltip settings
                    //==================================
                    tooltip     : {                
                        text: 'Athletics Facilities',
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
                    external_link: 'dining-commons.php',
                    pointer_pos : [705.0, 364],
                    sceneFunc: function(ctx) 
                    {
                        ctx.moveTo(631.929,375.218);
                        ctx.lineTo(632.285,391.222);
                        ctx.lineTo(639.99,395.134);
                        ctx.lineTo(782.484,361.466);
                        ctx.lineTo(774.186,357.792);
                        ctx.lineTo(777.387,356.606);
                        ctx.lineTo(747.582,341.817);
                        ctx.lineTo(622.92,369.883);
                        ctx.lineTo(631.929,375.218);
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
                    external_link: 'macmillian.php',
                    pointer_pos : [773.6, 495.6],
                    sceneFunc: function(ctx) 
                    {
                        ctx.moveTo(841.771,528.705);
                        ctx.lineTo(783.861,547.657);
                        ctx.lineTo(783.41,554.577);
                        ctx.lineTo(760.698,562.85);
                        ctx.lineTo(752.124,561.496);
                        ctx.lineTo(719.183,573.379);
                        ctx.lineTo(718.732,550.967);
                        ctx.lineTo(700.381,539.686);
                        ctx.lineTo(698.125,491.102);
                        ctx.lineTo(780.101,465.982);
                        ctx.lineTo(806.123,481.175);
                        ctx.lineTo(847.336,485.085);
                        ctx.lineTo(854.856,488.695);
                        ctx.lineTo(854.556,506.144);
                        ctx.lineTo(841.771,528.705);
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
                    external_link: 'entry-hall.php',
                    pointer_pos : [870.5, 552.0],
                    sceneFunc: function(ctx) 
                    {
                        ctx.moveTo(697.08,580.646);
                        ctx.lineTo(752.111,561.427);
                        ctx.lineTo(760.691,562.815);
                        ctx.lineTo(783.407,554.56);
                        ctx.lineTo(783.86,547.648);
                        ctx.lineTo(841.77,528.701);
                        ctx.lineTo(849.561,532.934);
                        ctx.lineTo(949.332,498.065);
                        ctx.lineTo(948.313,495.775);
                        ctx.lineTo(953.149,494.249);
                        ctx.lineTo(986.236,483.05);
                        ctx.lineTo(1033.069,506.465);
                        ctx.lineTo(1032.052,524.281);
                        ctx.lineTo(994.128,539.043);
                        ctx.lineTo(993.365,541.843);
                        ctx.lineTo(973.258,550.751);
                        ctx.lineTo(972.725,554.568);
                        ctx.lineTo(961.5,558.641);
                        ctx.lineTo(961.5,566);
                        ctx.lineTo(969.694,571.366);
                        ctx.lineTo(933.553,585.874);
                        ctx.lineTo(931.517,584.602);
                        ctx.lineTo(855.416,613.362);
                        ctx.lineTo(855.162,615.144);
                        ctx.lineTo(840.145,620.743);
                        ctx.lineTo(819.019,606.746);
                        ctx.lineTo(767.862,625.324);
                        ctx.lineTo(760.989,622.018);
                        ctx.lineTo(758.953,623.544);
                        ctx.lineTo(729.429,601.146);
                        ctx.lineTo(725.102,603.183);
                        ctx.lineTo(697.08,580.646);
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
                    external_link: 'ice-arena.php',
                    pointer_pos : [202.3, 598.6],
                    sceneFunc: function(ctx) 
                    {
                      ctx.moveTo(70.568,531.771);
                      ctx.lineTo(92.089,526.589);
                      ctx.lineTo(90.677,522.759);
                      ctx.lineTo(110.5,518.221);
                      ctx.lineTo(110.5,515);
                      ctx.lineTo(180.852,499.463);
                      ctx.lineTo(184.037,501.587);
                      ctx.lineTo(201.378,497.693);
                      ctx.lineTo(202.794,499.109);
                      ctx.lineTo(220.135,494.509);
                      ctx.lineTo(227.921,505.479);
                      ctx.lineTo(241.724,508.665);
                      ctx.lineTo(262.958,503.356);
                      ctx.lineTo(291.979,543.348);
                      ctx.lineTo(303.304,549.01);
                      ctx.lineTo(304.011,556.088);
                      ctx.lineTo(312.505,560.335);
                      ctx.lineTo(313.567,568.475);
                      ctx.lineTo(322.769,573.076);
                      ctx.lineTo(323.83,581.924);
                      ctx.lineTo(334.094,587.586);
                      ctx.lineTo(335.155,595.726);
                      ctx.lineTo(344.357,600.327);
                      ctx.lineTo(345.064,608.467);
                      ctx.lineTo(356.036,614.837);
                      ctx.lineTo(356.39,622.977);
                      ctx.lineTo(367.715,629.347);
                      ctx.lineTo(369.838,640.318);
                      ctx.lineTo(380.102,644.211);
                      ctx.lineTo(381.163,654.12);
                      ctx.lineTo(392.842,660.491);
                      ctx.lineTo(393.55,671.108);
                      ctx.lineTo(406.291,676.771);
                      ctx.lineTo(406.999,681.726);
                      ctx.lineTo(410.538,686.681);
                      ctx.lineTo(414.077,708.27);
                      ctx.lineTo(391.78,716.409);
                      ctx.lineTo(390.719,718.887);
                      ctx.lineTo(361.344,729.504);
                      ctx.lineTo(358.965,727.026);
                      ctx.lineTo(217.5,775.865);
                      ctx.lineTo(217.5,780);
                      ctx.lineTo(181.914,792.499);
                      ctx.lineTo(180.144,790.376);
                      ctx.lineTo(150.416,800.639);
                      ctx.lineTo(140.86,775.157);
                      ctx.lineTo(129.535,779.404);
                      ctx.lineTo(125.996,770.557);
                      ctx.lineTo(135.905,757.462);
                      ctx.lineTo(135.198,754.277);
                      ctx.lineTo(121.396,758.523);
                      ctx.lineTo(118.21,748.261);
                      ctx.lineTo(127.766,736.228);
                      ctx.lineTo(126.704,733.043);
                      ctx.lineTo(112.548,738.705);
                      ctx.lineTo(110.424,730.211);
                      ctx.lineTo(119.979,715.701);
                      ctx.lineTo(105.116,718.532);
                      ctx.lineTo(102.992,711.454);
                      ctx.lineTo(111.486,697.651);
                      ctx.lineTo(110.875,696.375);
                      ctx.lineTo(98.875,701.25);
                      ctx.lineTo(95.875,691.875);
                      ctx.lineTo(104.75,679.5);
                      ctx.lineTo(104,678.75);
                      ctx.lineTo(91.125,682.75);
                      ctx.lineTo(88.5,675);
                      ctx.lineTo(96.75,663.5);
                      ctx.lineTo(96.25,662.375);
                      ctx.lineTo(85,666.75);
                      ctx.lineTo(81.125,657.75);
                      ctx.lineTo(90,647.75);
                      ctx.lineTo(89.5,646.5);
                      ctx.lineTo(77.625,651);
                      ctx.lineTo(74.875,642.125);
                      ctx.lineTo(82.625,633.125);
                      ctx.lineTo(81.875,631.5);
                      ctx.lineTo(71.625,635.375);
                      ctx.lineTo(68.25,627.375);
                      ctx.lineTo(75.75,619.25);
                      ctx.lineTo(75.25,617.375);
                      ctx.lineTo(66,620.375);
                      ctx.lineTo(63.625,612.25);
                      ctx.lineTo(72,599.25);
                      ctx.lineTo(65.75,581.25);
                      ctx.lineTo(80.375,560);
                      ctx.lineTo(70.568,531.771);
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
