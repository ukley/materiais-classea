<?php get_header();?>

<body>
    <div id="app">
            <div class="wrapper">
        
                    <div class="sidebar" data-image="assets/img/sidebar-5.jpg" >
                           
                    <div class="sidebar-wrapper" style="background:#094257">
                                    <div class="logo">
                                        <a href="#" class="simple-text logo-mini">
                                            CA
                                        </a>
                                        <a href="#" class="simple-text logo-normal">
                                            Colégio Classe A
                                        </a>
                                    </div>
                             
            
                                   
                                    
                                
                                <ul class="nav" v-for="r in categorias" :key="r.id">   
                                    
                                        <li class="nav-item ">
                                                <a class="nav-link"  v-on:click.prevent=post(11)>
                                                        <i class="nc-icon nc-palette"></i>
                                                <p>ED INFANTIL PRÉ I</p>
                                            </a>
                                        </li>
                    
                    
                                        <li class="nav-item ">
                                                <a class="nav-link"  v-on:click.prevent=post(12)>
                                                        <i class="nc-icon nc-puzzle-10"></i>
                                                <p>ED INFANTIL PRÉ II</p>
                                            </a>
                                        </li>  
                                     
                                    <div id="menu-fundI">    
                                        <li class="nav-item">
                                            <a class="nav-link" data-toggle="collapse" href="#formsExamples" >
                                                <i class="nc-icon nc-app"></i>
                                                <p>
                                                    ENS FUNDAMENTAL I
                                                    <b class="caret"></b>
                                                </p>
                                            </a>
                    
                    
                                            <div class="collapse " id="formsExamples" id="foo">
                                                <ul class="nav" >
                                                    <li class="nav-item ">
                                                        <a class="nav-link" v-on:click.prevent=post(r[0].id)>
                                                            
                                                            <span class="sidebar-normal">{{r[0].name}}</span>
                                                        </a>
                                                    </li>
                                                    <li class="nav-item ">
                                                        <a class="nav-link" v-on:click.prevent=post(r[2].id)>
                                                            
                                                            <span class="sidebar-normal">{{r[2].name}}</span>
                                                        </a>
                                                    </li>
                                                    <li class="nav-item ">
                                                          <a class="nav-link" v-on:click.prevent=post(r[5].id)>
                                                            
                                                            <span class="sidebar-normal">{{r[5].name}}</span>
                                                        </a>
                                                    </li>
                                                    <li class="nav-item ">
                                                        <a class="nav-link" v-on:click.prevent=post(r[6].id)>
                                                            
                                                            <span class="sidebar-normal">{{r[6].name}}</span>
                                                        </a>
                                                    </li>
                    
                                                    <li class="nav-item ">
                                                        <a class="nav-link"  v-on:click.prevent=post(r[7].id)>
                                                            
                                                            <span class="sidebar-normal">{{r[7].name}}</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                    </div>


                                    
                                        
                    
                                        <li class="nav-item">
                                            <a class="nav-link" data-toggle="collapse" href="#tablesExamples">
                                                <i class="nc-icon nc-sun-fog-29"></i>
                                                <p>
                                                    ENS FUNDAMENTAL II &nbsp;&nbsp;&nbsp;
                                                    <b class="caret"></b>
                                                </p>
                                            </a>
                                            <div class="collapse " id="tablesExamples">
                                                <ul class="nav">
                    
                    
                                                     <li class="nav-item ">
                                                        <a class="nav-link"  v-on:click.prevent=post(r[8].id)>
                                                            
                                                            <span class="sidebar-normal">{{r[8].name}}</span>
                                                        </a>
                                                    </li>
                    
                    
                                                    <li class="nav-item ">
                                                        <a class="nav-link"  v-on:click.prevent=post(r[9].id)>
                                                            
                                                            <span class="sidebar-normal">{{r[9].name}}</span>
                                                        </a>
                                                    </li>     
                                                    
                                                    <li class="nav-item ">
                                                            <a class="nav-link"  v-on:click.prevent=post(18)>
                                                                
                                                                <span class="sidebar-normal">8° ANO</span>
                                                            </a>
                                                    </li> 
                    
                                                    <li class="nav-item ">
                                                            <a class="nav-link"  v-on:click.prevent=post(19)>
                                                                
                                                                <span class="sidebar-normal">9° ANO</span>
                                                            </a>
                                                    </li> 
                    
                                                </ul>
                                            </div>
                                        </li>
                    
                    
                                        <li class="nav-item">
                                            <a class="nav-link" data-toggle="collapse" href="#mapsExamples">
                                                    <i class="nc-icon nc-chart-bar-32"></i>
                                                    <p>
                                                   ENSINO MÉDIO
                                                    <b class="caret"></b>
                                                </p>
                                            </a>
                                            <div class="collapse " id="mapsExamples">
                                                <ul class="nav">
                    
                                                        <li class="nav-item ">
                                                                <a class="nav-link"  v-on:click.prevent=post(20)>
                                                                    
                                                                    <span class="sidebar-normal">1° Série</span>
                                                                </a>
                                                        </li>
                    
                    
                    
                                                        <li class="nav-item ">
                                                                <a class="nav-link"  v-on:click.prevent=post(21)>                                                                 
                                                                    <span class="sidebar-normal">2° Série</span>
                                                                </a>
                                                        </li>
                    
                    
                                                     <li class="nav-item ">
                                                                <a class="nav-link"  v-on:click.prevent=post(22)>
                                                                    
                                                                    <span class="sidebar-normal">3° Série</span>
                                                                </a>
                                                        </li>
                                                </ul>
                                            </div>
                                        </li>


                                        <li class="nav-item">
                                            <a class="nav-link"  v-on:click.prevent=post(24)>                                                                              

                                                   Clube de Humanidades
                                              
                                            </a>
                                           
                                        </li>                                                                                            
                                    </ul>
                                </div>
                              <!--Fim do menu-->
                            </div>
                    
                    
                            <div class="main-panel">
                                <!-- Navbar -->
                                <nav class="navbar navbar-expand-lg " color-on-scroll="500" >
                                    <div class="container-fluid">
                                        <a class="navbar-brand" href="#pablo"> Unidade Eletronorte </a>

                                        <button  type="button"  class="navbar-toggler navbar-toggler-right ml-auto hidden-sm-up "
                                         data-target=".navbar-collapse" data-toggle="collapse" aria-controls="navbar-collapse"
                                          aria-expanded="false" aria-label="Alteracao Navegacao ">
                                            <span class="navbar-toggler-bar burger-lines"></span>
                                            <span class="navbar-toggler-bar burger-lines"></span>
                                            <span class="navbar-toggler-bar burger-lines"></span>
                                        </button>   

                                    </div>
                                </nav>



                                <!-- End Navbar -->
                                <div class="content">
                                    <div class="container-fluid">          
                                    <div class="card" v-for="p in posts" :key="p.id">
                                        <div class="card-header">
                                            <h4 class="card-title">{{p[0].title.rendered}}</h4>
                                            <p class="card-category">Acesse o material e faça o Download</p>
                                        </div>
                                        <div class="card-body">
                                            <p v-html="p[0].content.rendered"></p>
                                        </div>
                                    </div>
                                        <div class="row">
                                           
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                                
                                <footer class="footer">
                                    <div class="container-fluid">
                                        <nav>
                                            <ul class="footer-menu">
                                                <li>
                                                    <a href="#">
                                                        Home
                                                    </a>
                                                </li>
                                                
                                            </ul>
                                        
                                        </nav>
                                    </div>
                                </footer>
                            </div>
                    </div>
                    

    </div>
            <script>
                
                let app=new Vue({
                    el:'#app',                    
                    data:{                       
                        categorias:[],
                        posts:[]
                    },                 

                    methods:{
                        start(){
                            fetch('https://colegioclassea.com.br/materiais/wp-json/wp/v2/categories')
                                .then((r)=>{
                                    r.json().then((cat)=>{
                                        this.categorias.push(cat)                                                    
                                            });
                                        });                          
                                                                                        
                              },

                              closeMenu(){    
                                $('.navbar-collapse a').click(function(){
            $(".navbar-collapse").collapse('hide');
        });

                               
                            },

                            post(id){
                               
                               if(this.posts.length > 0){
                                 this.posts.pop();

                               }
                                fetch('https://colegioclassea.com.br/materiais/wp-json/wp/v2/posts?categories='+id)
                                    .then((r)=>{
                                        r.json().then((v)=>{
                                                    this.posts.push(v)                                                      
                                                });
                                            });      
                                            this.closeMenu()                    
                                        }                                                    
                                },

                            mounted(){
                                this.start()
                            }              
                        });
            </script> 

</body>
<!--   Core JS Files   -->

<?php get_footer();?>