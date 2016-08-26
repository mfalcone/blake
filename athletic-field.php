<!DOCTYPE HTML>
<html>
<head>
    <?php include('metas.php'); ?>

    <script type="text/javascript">

        // current background image located on images/floorplans/[big-medium-small]
        current_bg_name = 'athletic-field';            
        
        var AreasSettingsList = 
            [
               

                //==================================
                //####### TITLE #######
                //==================================
                {
                    name        : '10m',
                    naming_opp  : 'athletic-field/af-10m.html',
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
                        text: '<span>$10,000,000</span>',
                        fontSize: 16,
                        align: 'center'            
                    }        
                }    , 

                 {
                    //==================================
                    // Basic settings
                    //==================================
                    name        : '23',
                    naming_opp  : 'kc-field/a.outdoor-athletic-complex.html',
                    pointer_pos : [1445.1, 388.0],
                    sceneFunc: function(ctx) 
                    {
                        ctx.moveTo(1428.5, 140.5);
                          ctx.lineTo(1463.5, 140.0);
                          ctx.lineTo(1463.5, 889.5);
                          ctx.lineTo(1428.5, 889.5);
                          ctx.lineTo(1428.5, 140.5);
                    },
                    fill        : 'rgba(170,255,0,0.3)',
                    stroke      : '#456800',
                    strokeWidth : 1,        

                    //==================================
                    // Tooltip settings
                    //==================================
                    tooltip     : {                
                        text: 'Outdoor Athletic Complex',
                        fontSize: 14,                         
                        align: 'center'            
                    }        
                }    ,
                //==================================
                //####### TITLE #######
                //==================================
                {
                    name        : '2.5',
                    naming_opp  : 'athletic-field/af-2-5m.html',
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
                        text: '<span>$2,500,000</span>',
                        fontSize: 16,
                        align: 'center'            
                    }        
                }    , 

                 {
                    //==================================
                    // Basic settings
                    //==================================
                    name        : '29',
                    naming_opp  : 'athletic-field/h.baseball-field.html',
                    pointer_pos : [1260.5, 240.0],
                    sceneFunc: function(ctx) 
                    {
                        ctx.moveTo(1190.3, 152.5);
                          ctx.lineTo(1179.1, 235.2);
                          ctx.lineTo(1181.3, 312.2);
                          ctx.lineTo(1196.5, 327.3);
                          ctx.lineTo(1264.5, 322.1);
                          ctx.lineTo(1368.5, 302.1);
                          ctx.lineTo(1370.5, 302.1);
                          ctx.lineTo(1370.5, 302.1);
                          ctx.lineTo(1386.5, 234.5);
                          ctx.lineTo(1378.9, 187.5);
                          ctx.lineTo(1355.5, 148.5);
                          ctx.lineTo(1331.5, 137.5);
                          ctx.lineTo(1190.3, 137.5);
                    },
                    fill        : 'rgba(170,255,0,0.3)',
                    stroke      : '#456800',
                    strokeWidth : 1,        

                    //==================================
                    // Tooltip settings
                    //==================================
                    tooltip     : {                
                        text: 'Baseball Field ',
                        fontSize: 14,                         
                        align: 'center'            
                    }        
                }    ,
                {
                    //==================================
                    // Basic settings
                    //==================================
                    name        : '24',
                    naming_opp  : 'athletic-field/b.turf-multiplex.html',
                    pointer_pos : [802.5, 510.0],
                    sceneFunc: function(ctx) 
                    {
                        ctx.moveTo(749.5, 439.5);
                          ctx.lineTo(855.5, 439.5);
                          ctx.lineTo(855.5, 641.5);
                          ctx.lineTo(749.5, 641.5);
                          ctx.lineTo(749.5, 439.5);
                    },
                    fill        : 'rgba(170,255,0,0.3)',
                    stroke      : '#456800',
                    strokeWidth : 1,        

                    //==================================
                    // Tooltip settings
                    //==================================
                    tooltip     : {                
                        text: 'Turf Multiplex',
                        fontSize: 14,                         
                        align: 'center'            
                    }        
                }    ,

                //==================================
                //####### TITLE #######
                //==================================
                {
                    name        : '500',
                    naming_opp  : 'athletic-field/af-500.html',
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
                    name        : '25',
                    naming_opp  : 'athletic-field/d.lower-courts.html',
                    pointer_pos : [1003.5, 370.0],
                    sceneFunc: function(ctx) 
                    {
                        ctx.moveTo(1068.3, 340.6);
                          ctx.lineTo(1107.6, 397.3);
                          ctx.lineTo(991.6, 475.6);
                          ctx.lineTo(950.3, 422.0);
                          ctx.lineTo(1068.3, 340.6);
                    },
                    fill        : 'rgba(170,255,0,0.3)',
                    stroke      : '#456800',
                    strokeWidth : 1,        

                    //==================================
                    // Tooltip settings
                    //==================================
                    tooltip     : {                
                        text: 'Lower Courts',
                        fontSize: 14,                         
                        align: 'center'            
                    }        
                }    ,
                {
                    //==================================
                    // Basic settings
                    //==================================
                    name        : '27',
                    naming_opp  : 'athletic-field/c.upper-courts.html',
                    pointer_pos : [750.5, 350.0],
                    sceneFunc: function(ctx) 
                    {
                        ctx.moveTo(682.5, 364.5);
                          ctx.lineTo(828.5, 364.5);
                          ctx.lineTo(828.5, 426.5);
                          ctx.lineTo(682.5, 426.5);
                          ctx.lineTo(682.5, 364.5);
                    },
                    fill        : 'rgba(170,255,0,0.3)',
                    stroke      : '#456800',
                    strokeWidth : 1,        

                    //==================================
                    // Tooltip settings
                    //==================================
                    tooltip     : {                
                        text: 'Upper Courts',
                        fontSize: 14,                         
                        align: 'center'            
                    }        
                }    ,

                {
                    //==================================
                    // Basic settings
                    //==================================
                    name        : '32',
                    naming_opp  : 'athletic-field/e.concession-stand.html',
                    pointer_pos : [1160.5, 340.0],
                    sceneFunc: function(ctx) 
                    {
                        ctx.moveTo(1169.5, 331.5);
                          ctx.lineTo(1178.5, 339.5);
                          ctx.lineTo(1165.5, 355.5);
                          ctx.lineTo(1156.5, 346.3);
                          ctx.lineTo(1169.5, 331.5);
                    },
                    fill        : 'rgba(170,255,0,0.3)',
                    stroke      : '#456800',
                    strokeWidth : 1,        

                    //==================================
                    // Tooltip settings
                    //==================================
                    tooltip     : {                
                        text: 'Concession Stand',
                        fontSize: 14,                         
                        align: 'center'            
                    }        
                }    ,
                 {
                    //==================================
                    // Basic settings
                    //==================================
                    name        : '32-5',
                    naming_opp  : 'athletic-field/i.lower-school-playground.html',
                    pointer_pos : [905.5, 560.0],
                    sceneFunc: function(ctx) 
                    {
                        ctx.moveTo(905.5, 543.0);
                          ctx.lineTo(911.4, 543.0);
                          ctx.lineTo(916.9, 542.1);
                          ctx.lineTo(921.8, 543.1);
                          ctx.lineTo(925.4, 545.4);
                          ctx.lineTo(927.7, 549.3);
                          ctx.lineTo(928.5, 553.7);
                          ctx.lineTo(928.2, 557.6);
                          ctx.lineTo(926.4, 562.2);
                          ctx.lineTo(914.8, 572.8);
                          ctx.lineTo(908.3, 575.9);
                          ctx.lineTo(900.3, 576.7);
                          ctx.lineTo(893.9, 575.1);
                          ctx.lineTo(888.5, 571.3);
                          ctx.lineTo(886.4, 563.8);
                          ctx.lineTo(888.5, 556.6);
                          ctx.lineTo(893.6, 549.8);
                          ctx.lineTo(899.1, 545.7);
                          ctx.lineTo(905.5, 544.0);
                    },
                    fill        : 'rgba(170,255,0,0.3)',
                    stroke      : '#456800',
                    strokeWidth : 1,        

                    //==================================
                    // Tooltip settings
                    //==================================
                    tooltip     : {                
                        text: 'Lower School Playground',
                        fontSize: 14,                         
                        align: 'center'            
                    }        
                }    ,

                
                //==================================
                //####### TITLE #######
                //==================================
                {
                    name        : '100',
                    naming_opp  : 'athletic-field/af-100.html',
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
                    name        : '26',
                    naming_opp  : 'athletic-field/f.individual-courts.html',
                    pointer_pos : [984.5, 444.0],
                    sceneFunc: function(ctx) 
                    {
                        ctx.moveTo(981.2, 419.8);
                          ctx.lineTo(1006.8, 452.3);
                          ctx.lineTo(990.3, 462.2);
                          ctx.lineTo(964.2, 431.3);
                          ctx.lineTo(981.2, 419.8);
                    },
                    fill        : 'rgba(170,255,0,0.3)',
                    stroke      : '#456800',
                    strokeWidth : 1,        

                    //==================================
                    // Tooltip settings
                    //==================================
                    tooltip     : {                
                        text: 'Individual Courts',
                        fontSize: 14,                         
                        align: 'center'            
                    }        
                }    ,

                {
                    //==================================
                    // Basic settings
                    //==================================
                    name        : '28',
                    naming_opp  : 'athletic-field/g.individual-courts.html',
                    pointer_pos : [700.5, 400.0],
                    sceneFunc: function(ctx) 
                    {
                        ctx.moveTo(690.5, 378.5);
                          ctx.lineTo(712.5, 378.5);
                          ctx.lineTo(712.5, 417.5);
                          ctx.lineTo(690.5, 417.5);
                          ctx.lineTo(690.5, 378.5);
                    },
                    fill        : 'rgba(170,255,0,0.3)',
                    stroke      : '#456800',
                    strokeWidth : 1,        

                    //==================================
                    // Tooltip settings
                    //==================================
                    tooltip     : {                
                        text: 'Individual Courts',
                        fontSize: 14,                         
                        align: 'center'            
                    }        
                }    ,

                {
                    //==================================
                    // Basic settings
                    //==================================
                    name        : '33',
                    naming_opp  : 'athletic-field/j.baseball-stadium-plaza.html',
                    pointer_pos : [1190.5, 340.0],
                    sceneFunc: function(ctx) 
                    {
                        ctx.moveTo(1178.5, 312.5);
                          ctx.lineTo(1202.5, 333.5);
                          ctx.lineTo(1169.1, 368.1);
                          ctx.lineTo(1147.1, 347.2);
                          ctx.lineTo(1178.5, 312.5);
                    },
                    fill        : 'rgba(170,255,0,0.3)',
                    stroke      : '#456800',
                    strokeWidth : 1,        

                    //==================================
                    // Tooltip settings
                    //==================================
                    tooltip     : {                
                        text: 'Baseball Stadium Plaza',
                        fontSize: 14,                         
                        align: 'center'            
                    }        
                }    ,



                 {
                    //==================================
                    // Basic settings
                    //==================================
                    name        : '36',
                    naming_opp  : 'athletic-field/n.prek-playground.html',
                    pointer_pos : [730.5, 820.0],
                    sceneFunc: function(ctx) 
                    {
                        ctx.moveTo(717.5, 800.5);
                        ctx.lineTo(745.5, 800.5);
                        ctx.lineTo(745.5, 825.4);
                        ctx.lineTo(717.5, 825.4);
                        ctx.lineTo(717.5, 800.5);
                    },
                    fill        : 'rgba(170,255,0,0.3)',
                    stroke      : '#456800',
                    strokeWidth : 1,        

                    //==================================
                    // Tooltip settings
                    //==================================
                    tooltip     : {                
                        text: 'Pre-K Playground',
                        fontSize: 14,                         
                        align: 'center'            
                    }        
                } ,

                
                
                //==================================
                //####### TITLE #######
                //==================================
                {
                    name        : '30',
                    naming_opp  : 'athletic-field/af-2-5m.html',
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
                    name        : '31',
                    naming_opp  : 'athletic-field/k.guest-batting-cage.html',
                    pointer_pos : [1160.5, 267.0],
                    sceneFunc: function(ctx) 
                    {
                        ctx.moveTo(1173.5, 255.7);
                        ctx.lineTo(1178.4, 255.5);
                        ctx.lineTo(1179.4, 282.4);
                        ctx.lineTo(1174.6, 281.3);
                    },
                    fill        : 'rgba(170,255,0,0.3)',
                    stroke      : '#456800',
                    strokeWidth : 1,        

                    //==================================
                    // Tooltip settings
                    //==================================
                    tooltip     : {                
                        text: 'Guest Batting Cage',
                        fontSize: 14,                         
                        align: 'center'            
                    }        
                }    ,
                {
                    //==================================
                    // Basic settings
                    //==================================
                    name        : '32',
                    naming_opp  : 'athletic-field/l.home-batting-cage.html',
                    pointer_pos : [1345.5, 320.0],
                    sceneFunc: function(ctx) 
                    {
                        ctx.moveTo(1325.2, 311.5);
                        ctx.lineTo(1360.2, 306.1);
                        ctx.lineTo(1361.6, 316.8);
                        ctx.lineTo(1327.5, 320.8);
                        ctx.lineTo(1325.2, 311.5);
                    },
                    fill        : 'rgba(170,255,0,0.3)',
                    stroke      : '#456800',
                    strokeWidth : 1,        

                    //==================================
                    // Tooltip settings
                    //==================================
                    tooltip     : {                
                        text: 'Home Batting Cage',
                        fontSize: 14,                         
                        align: 'center'            
                    }        
                }    ,
                //==================================
                //####### TITLE #######
                //==================================
                {
                    name        : '33',
                    naming_opp  : 'athletic-field/af-2-5m.html',
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
                    name        : '34',
                    naming_opp  : 'athletic-field/k.guest-batting-cage.html',
                    pointer_pos : [1380.5, 177.0],
                    sceneFunc: function(ctx) 
                    {
                        ctx.moveTo(1387.5, 150.5);
                        ctx.lineTo(1415.5, 150.5);
                        ctx.lineTo(1415.5, 175.4);
                        ctx.lineTo(1387.5, 175.4);
                        ctx.lineTo(1387.5, 150.5);
                    },
                    fill        : 'rgba(170,255,0,0.3)',
                    stroke      : '#456800',
                    strokeWidth : 1,        

                    //==================================
                    // Tooltip settings
                    //==================================
                    tooltip     : {                
                        text: 'Flagpole',
                        fontSize: 14,                         
                        align: 'center'            
                    }        
                } ,  
               
            ];

        $(document).ready(function(){
            setTimeout(function() {
            var delta = -15;
            executeZoom(delta, 50);
            },4000)
        })
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
