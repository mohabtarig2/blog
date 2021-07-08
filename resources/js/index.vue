<template>

<div >




<div v-if="users.roles.name =='consulte'">
    <div v-if="users.company !== null">
  <div v-if="users.companyfile!==null">
      <div v-if="users.achivement_file!==null">


<div class="d-flex" id="wrapper" :class="{toggled : !toggled}" >

    <!-- Sidebar -->
    <div class="bg-light border-right" id="sidebar-wrapper" v-if="isLoggedIn">
      <div class="sidebar-heading"></div>
      <div class="list-group list-group-flush">


         <router-link class="list-group-item list-group-item-action bg-light " :to="{name:'Dashboard'}">
             <img :src="'assets/img/dashboard.svg'" width="20" > <span class="font-weight-bold  ml-3"> Dashboard</span>
             </router-link>
              <router-link class="list-group-item list-group-item-action bg-light " :to="{name:'profile'}">
             <img :src="'assets/img/avatar.svg'" width="20" > <span class="font-weight-bold  ml-3"> {{users.name}}</span>
             </router-link>
 <router-link :to="{name: 'Projects'}" class="list-group-item list-group-item-action bg-light">
     <i class="fa fa-cubes main-color" style="font-size:20px"></i>  <span class="font-weight-bold  ml-3">Projects</span>  </router-link>


         <router-link class="list-group-item list-group-item-action bg-light " :to="{name:'MyOffer'}">
             <img :src="'assets/img/tag.svg'" width="20" > <span class="font-weight-bold  ml-3"> My ads</span>
             </router-link>

              <router-link class="list-group-item list-group-item-action bg-light " :to="{name:'Settings'}">
             <img :src="'assets/img/Settings.svg'" width="20" > <span class="font-weight-bold  ml-3">Settings</span>
             </router-link>

              <router-link class="list-group-item list-group-item-action bg-light " :to="{name:'showAllOfferClient'}">
             <i class="fa fa-tag main-color" style="font-size:22px " ></i> <span class="font-weight-bold  ml-3">All offers</span>
             </router-link>

 <a class="list-group-item list-group-item-action bg-light" href="" @click="logout">     <i class="fa fa-power-off mr-1  main-color"></i>
 <span class="font-weight-bold  ml-3">Log out</span></a>




      </div>
    </div>

    <!-- /#sidebar-wrapper -->
    <!-- Page Content -->
    <div id="page-content-wrapper" v-if="users.roles.name !='admin'">


      <nav class="navbar navbar-expand-lg navbar-dark bg-dark border-bottom ">
          <div class="container">
        <button class="btn text-light" id="menu-toggle" @click="toggled = !toggled" v-if="isLoggedIn"><i class="fa fa-bars "></i></button>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse " id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
            <li class="nav-item active"  v-if="isLoggedIn">
              <notification-bar></notification-bar>
            </li>
            <li class="nav-item active"  v-if="isLoggedIn">
              <a class="nav-link" href="#"><i class="fa fa-envelope text-light"></i> <span class="sr-only">(current)</span></a>
            </li>
             <span class="nav-item" v-if="!isLoggedIn">
          <router-link :to="{name: 'login'}" class="nav-link">Sign-in</router-link>
        </span>
            <li class="nav-item" v-if="!isLoggedIn">

          <router-link :to="{name: 'Register'}" class="nav-link">Register</router-link>

            </li>
              <li class="nav-item" v-if="isLoggedIn">



            </li>
              <span class="nav-item" v-if="isLoggedIn">
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">

             <img src="https://www.bhsu.edu/directory/_files/images/no-image-directory.png" width="30" class="rounded-circle ">
              </a>
              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                   <a class="dropdown-item" href="#">
                 <user-profile
     :name="users.name"
      >

                </user-profile>
                   </a>
                 <router-link class="dropdown-item" :to="{name:'profile'}"><i class="fa fa-user mr-1 "></i> profile</router-link>



                 <router-link class="dropdown-item" :to="{name:'Settings'}"><i class="fa fa-cog mr-1"></i> Settings</router-link>
                <div class="dropdown-divider"></div>

                 <a class="dropdown-item" href="" @click="logout">     <i class="fa fa-power-off mr-1"></i> Logout</a>
              </div>
            </li>
              </span>
          </ul>
        </div>
        </div>
      </nav>

      <router-view>

        </router-view>

    </div>







</div>
  </div>
  <div v-else>
 <nav class="navbar navbar-expand-lg navbar-dark bg-dark border-bottom ">
          <div class="container">
               <a class="nav-link text-light" href="" @click="logout"><i class="fa fa-power-off"></i>  Logout</a>
        </div>
      </nav>
      <div class="container text-center mt-5 mx-auto">
        <h2 class="text-center mb-4 ">File achivement </h2>
      <ul class="progressbar">
          <li class="active">Rigester</li>
          <li class="active">Complete Your Account</li>
          <li class="active">licence Files</li>
          <li >achivement Files</li>

  </ul>




      </div>
<achive></achive>

  </div>
  </div>
  <div v-else>

   <nav class="navbar navbar-expand-lg navbar-dark bg-dark border-bottom ">
          <div class="container">
               <a class="nav-link text-light" href="" @click="logout"><i class="fa fa-power-off"></i>  Logout</a>
        </div>
      </nav>
      <div class="container text-center mt-5 mx-auto">
        <h2 class="text-center mb-4 "> Upload licence </h2>
   <ul class="progressbar">
          <li class="active">Rigester</li>
          <li class="active">Complete Your Account</li>
          <li >licence Files</li>
          <li >achivement Files</li>

  </ul>




      </div>
<FileUpload></FileUpload>

  </div>
    </div>

    <div v-else>

      <nav class="navbar navbar-expand-lg navbar-dark bg-dark border-bottom ">
          <div class="container">
               <a class="nav-link text-light" href="" @click="logout"><i class="fa fa-power-off"></i>  Logout</a>
        </div>
      </nav>
      <div class="container text-center mt-5 mx-auto">
        <h2 class="text-center mb-4 ">Complete Your Account</h2>
      <ul class="progressbar">
          <li class="active">Rigester</li>
          <li>Complete Your Account</li>
          <li>Upload Files</li>
          <li >achivement Files</li>


  </ul>




      </div>
        <complete></complete>

    </div>



    </div>
<div v-if="users.roles.name =='Furnitur'">
    <div v-if="users.company !== null">
  <div v-if="users.companyfile!==null">
      <div v-if="users.achivement_file!==null">

Furnitur
<div class="d-flex" id="wrapper" :class="{toggled : !toggled}" >

    <!-- Sidebar -->
    <div class="bg-light border-right" id="sidebar-wrapper" v-if="isLoggedIn">
      <div class="sidebar-heading">AMb</div>
      <div class="list-group list-group-flush">

         <router-link class="list-group-item list-group-item-action bg-light" :to="{name:'Dashboard'}">
             <i class="fa fa-tachometer fa-1x" aria-hidden="true"></i> Dashboard
             </router-link>
              <button class="list-group-item list-group-item-action bg-light" @click="AdsToggle = !AdsToggle" v-if="users.roles.name !=='user'">My Ads </button>


         <router-link class="list-group-item list-group-item-action bg-light" :to="{name:'MyOffer'}">My Ads</router-link>

         <router-link class="list-group-item list-group-item-action bg-light" :to="{name:'Settings'}">Settings</router-link>



      </div>
    </div>

    <!-- /#sidebar-wrapper -->
    <!-- Page Content -->
    <div id="page-content-wrapper" >


      <nav class="navbar navbar-expand-lg navbar-dark bg-dark border-bottom ">
          <div class="container">
        <button class="btn text-light" id="menu-toggle" @click="toggled = !toggled" v-if="isLoggedIn"><i class="fa fa-bars "></i></button>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse " id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
            <li class="nav-item active"  v-if="isLoggedIn">
              <a class="nav-link" href="#"><i class="fa fa-bell text-light"></i> <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active"  v-if="isLoggedIn">
              <a class="nav-link" href="#"><i class="fa fa-envelope text-light"></i> <span class="sr-only">(current)</span></a>
            </li>
             <span class="nav-item" v-if="!isLoggedIn">
          <router-link :to="{name: 'login'}" class="nav-link">Sign-in</router-link>
        </span>
            <li class="nav-item" v-if="!isLoggedIn">

          <router-link :to="{name: 'Register'}" class="nav-link">Register</router-link>

            </li>
              <li class="nav-item" v-if="isLoggedIn">

          <router-link :to="{name: 'Projects'}" class="nav-link"> <i class="fa fa-cubes"></i> Projects  </router-link>

            </li>
              <span class="nav-item" v-if="isLoggedIn">
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">

                <user-profile
     :name="users.name"
      >

                </user-profile>
              </a>
              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                   <a class="dropdown-item" href="#">
                 <user-profile
     :name="users.email"
      >

                </user-profile>
                   </a>
                 <router-link class="dropdown-item" :to="{name:'profile'}"><i class="fa fa-user mr-1 "></i> profile</router-link>



                 <router-link class="dropdown-item" :to="{name:'Settings'}"><i class="fa fa-cog mr-1"></i> Settings</router-link>
                <div class="dropdown-divider"></div>


                 <a class="dropdown-item" href="" @click="logout">     <i class="fa fa-power-off mr-1"></i> Logout</a>
              </div>
            </li>
              </span>
          </ul>
        </div>
        </div>
      </nav>

      <router-view>

        </router-view>

    </div>







</div>
  </div>
  <div v-else>
 <nav class="navbar navbar-expand-lg navbar-dark bg-dark border-bottom ">
          <div class="container">
               <a class="nav-link text-light" href="" @click="logout"><i class="fa fa-power-off"></i>  Logout</a>
        </div>
      </nav>
      <div class="container text-center mt-5 mx-auto">
        <h2 class="text-center mb-4 ">File achivement </h2>
      <ul class="progressbar">
          <li class="active">Rigester</li>
          <li class="active">Complete Your Account</li>
          <li class="active">licence Files</li>
          <li >achivement Files</li>

  </ul>




      </div>
<achive></achive>

  </div>
  </div>
  <div v-else>

   <nav class="navbar navbar-expand-lg navbar-dark bg-dark border-bottom ">
          <div class="container">
               <a class="nav-link text-light" href="" @click="logout"><i class="fa fa-power-off"></i>  Logout</a>
        </div>
      </nav>
      <div class="container text-center mt-5 mx-auto">
        <h2 class="text-center mb-4 "> Upload licence </h2>
   <ul class="progressbar">
          <li class="active">Rigester</li>
          <li class="active">Complete Your Account</li>
          <li >licence Files</li>
          <li >achivement Files</li>

  </ul>




      </div>
<FileUpload></FileUpload>

  </div>
    </div>

    <div v-else>

      <nav class="navbar navbar-expand-lg navbar-dark bg-dark border-bottom ">
          <div class="container">
               <a class="nav-link text-light" href="" @click="logout"><i class="fa fa-power-off"></i>  Logout</a>
        </div>
      </nav>
      <div class="container text-center mt-5 mx-auto">
        <h2 class="text-center mb-4 ">Complete Your Account</h2>
      <ul class="progressbar">
          <li class="active">Rigester</li>
          <li>Complete Your Account</li>
          <li>Upload Files</li>
          <li >achivement Files</li>


  </ul>




      </div>
        <complete></complete>

    </div>



    </div>
<div v-if="users.roles.name =='Stone'">
    <div v-if="users.company !== null">
  <div v-if="users.companyfile!==null">
      <div v-if="users.achivement_file!==null">
Stone

<div class="d-flex" id="wrapper" :class="{toggled : !toggled}" >

    <!-- Sidebar -->
    <div class="bg-light border-right" id="sidebar-wrapper" v-if="isLoggedIn">
      <div class="sidebar-heading">AMb</div>
      <div class="list-group list-group-flush">

         <router-link class="list-group-item list-group-item-action bg-light" :to="{name:'Dashboard'}">
             <i class="fa fa-tachometer fa-1x" aria-hidden="true"></i> Dashboard
             </router-link>
              <button class="list-group-item list-group-item-action bg-light" @click="AdsToggle = !AdsToggle" v-if="users.roles.name !=='user'">My Ads </button>


         <router-link class="list-group-item list-group-item-action bg-light" :to="{name:'MyOffer'}">My Offer</router-link>
         <router-link class="list-group-item list-group-item-action bg-light" :to="{name:'Settings'}">Settings</router-link>



      </div>
    </div>

    <!-- /#sidebar-wrapper -->
    <!-- Page Content -->
    <div id="page-content-wrapper" >


      <nav class="navbar navbar-expand-lg navbar-dark bg-dark border-bottom ">
          <div class="container">
        <button class="btn text-light" id="menu-toggle" @click="toggled = !toggled" v-if="isLoggedIn"><i class="fa fa-bars "></i></button>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse " id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
            <li class="nav-item active"  v-if="isLoggedIn">
              <a class="nav-link" href="#"><i class="fa fa-bell text-light"></i> <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active"  v-if="isLoggedIn">
              <a class="nav-link" href="#"><i class="fa fa-envelope text-light"></i> <span class="sr-only">(current)</span></a>
            </li>
             <span class="nav-item" v-if="!isLoggedIn">
          <router-link :to="{name: 'login'}" class="nav-link">Sign-in</router-link>
        </span>
            <li class="nav-item" v-if="!isLoggedIn">

          <router-link :to="{name: 'Register'}" class="nav-link">Register</router-link>

            </li>
              <li class="nav-item" v-if="isLoggedIn">

          <router-link :to="{name: 'Projects'}" class="nav-link"> <i class="fa fa-cubes"></i> Projects  </router-link>

            </li>
              <span class="nav-item" v-if="isLoggedIn">
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">

                <user-profile
     :name="users.name"
      >

                </user-profile>
              </a>
              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                   <a class="dropdown-item" href="#">
                 <user-profile
     :name="users.email"
      >

                </user-profile>
                   </a>
                 <router-link class="dropdown-item" :to="{name:'profile'}"><i class="fa fa-user mr-1 "></i> profile</router-link>



                 <router-link class="dropdown-item" :to="{name:'Settings'}"><i class="fa fa-cog mr-1"></i> Settings</router-link>
                <div class="dropdown-divider"></div>

                 <a class="dropdown-item" href="" @click="logout">     <i class="fa fa-power-off mr-1"></i> Logout</a>
              </div>
            </li>
              </span>
          </ul>
        </div>
        </div>
      </nav>

      <router-view>

        </router-view>

    </div>







</div>
  </div>
  <div v-else>
 <nav class="navbar navbar-expand-lg navbar-dark bg-dark border-bottom ">
          <div class="container">
               <a class="nav-link text-light" href="" @click="logout"><i class="fa fa-power-off"></i>  Logout</a>
        </div>
      </nav>
      <div class="container text-center mt-5 mx-auto">
        <h2 class="text-center mb-4 ">File achivement </h2>
      <ul class="progressbar">
          <li class="active">Rigester</li>
          <li class="active">Complete Your Account</li>
          <li class="active">licence Files</li>
          <li >achivement Files</li>

  </ul>




      </div>
<achive></achive>

  </div>
  </div>
  <div v-else>

   <nav class="navbar navbar-expand-lg navbar-dark bg-dark border-bottom ">
          <div class="container">
               <a class="nav-link text-light" href="" @click="logout"><i class="fa fa-power-off"></i>  Logout</a>
        </div>
      </nav>
      <div class="container text-center mt-5 mx-auto">
        <h2 class="text-center mb-4 "> Upload licence </h2>
   <ul class="progressbar">
          <li class="active">Rigester</li>
          <li class="active">Complete Your Account</li>
          <li >licence Files</li>
          <li >achivement Files</li>

  </ul>




      </div>
<FileUpload></FileUpload>

  </div>
    </div>

    <div v-else>

      <nav class="navbar navbar-expand-lg navbar-dark bg-dark border-bottom ">
          <div class="container">
               <a class="nav-link text-light" href="" @click="logout"><i class="fa fa-power-off"></i>  Logout</a>
        </div>
      </nav>
      <div class="container text-center mt-5 mx-auto">
        <h2 class="text-center mb-4 ">Complete Your Account</h2>
      <ul class="progressbar">
          <li class="active">Rigester</li>
          <li>Complete Your Account</li>
          <li>Upload Files</li>
          <li >achivement Files</li>


  </ul>




      </div>
        <complete></complete>

    </div>



    </div>
<div v-if="users.roles.name =='Havc'">
    <div v-if="users.company !== null">
  <div v-if="users.companyfile!==null">
      <div v-if="users.achivement_file!==null">

Havc
<div class="d-flex" id="wrapper" :class="{toggled : !toggled}" >

    <!-- Sidebar -->
    <div class="bg-light border-right" id="sidebar-wrapper" v-if="isLoggedIn">
      <div class="sidebar-heading">AMb</div>
      <div class="list-group list-group-flush">

         <router-link class="list-group-item list-group-item-action bg-light" :to="{name:'Dashboard'}">
             <i class="fa fa-tachometer fa-1x" aria-hidden="true"></i> Dashboard
             </router-link>
              <button class="list-group-item list-group-item-action bg-light" @click="AdsToggle = !AdsToggle" v-if="users.roles.name !=='user'">My Ads </button>

         <router-link class="list-group-item list-group-item-action bg-light" :to="{name:'MyOffer'}">My Offer</router-link>
         <router-link class="list-group-item list-group-item-action bg-light" :to="{name:'Settings'}">Settings</router-link>



      </div>
    </div>

    <!-- /#sidebar-wrapper -->
    <!-- Page Content -->
    <div id="page-content-wrapper" >


      <nav class="navbar navbar-expand-lg navbar-dark bg-dark border-bottom ">
          <div class="container">
        <button class="btn text-light" id="menu-toggle" @click="toggled = !toggled" v-if="isLoggedIn"><i class="fa fa-bars "></i></button>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse " id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
            <li class="nav-item active"  v-if="isLoggedIn">
              <a class="nav-link" href="#"><i class="fa fa-bell text-light"></i> <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active"  v-if="isLoggedIn">
              <a class="nav-link" href="#"><i class="fa fa-envelope text-light"></i> <span class="sr-only">(current)</span></a>
            </li>
             <span class="nav-item" v-if="!isLoggedIn">
          <router-link :to="{name: 'login'}" class="nav-link">Sign-in</router-link>
        </span>
            <li class="nav-item" v-if="!isLoggedIn">

          <router-link :to="{name: 'Register'}" class="nav-link">Register</router-link>

            </li>
              <li class="nav-item" v-if="isLoggedIn">

          <router-link :to="{name: 'Projects'}" class="nav-link"> <i class="fa fa-cubes"></i> Projects  </router-link>

            </li>
              <span class="nav-item" v-if="isLoggedIn">
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">

                <user-profile
     :name="users.name"
      >

                </user-profile>
              </a>
              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                   <a class="dropdown-item" href="#">
                 <user-profile
     :name="users.email"
      >

                </user-profile>
                   </a>
                 <router-link class="dropdown-item" :to="{name:'profile'}"><i class="fa fa-user mr-1 "></i> profile</router-link>



                 <router-link class="dropdown-item" :to="{name:'Settings'}"><i class="fa fa-cog mr-1"></i> Settings</router-link>
                <div class="dropdown-divider"></div>

                 <a class="dropdown-item" href="" @click="logout">     <i class="fa fa-power-off mr-1"></i> Logout</a>
              </div>
            </li>
              </span>
          </ul>
        </div>
        </div>
      </nav>

      <router-view>

        </router-view>

    </div>







</div>
  </div>
  <div v-else>
 <nav class="navbar navbar-expand-lg navbar-dark bg-dark border-bottom ">
          <div class="container">
               <a class="nav-link text-light" href="" @click="logout"><i class="fa fa-power-off"></i>  Logout</a>
        </div>
      </nav>
      <div class="container text-center mt-5 mx-auto">
        <h2 class="text-center mb-4 ">File achivement </h2>
      <ul class="progressbar">
          <li class="active">Rigester</li>
          <li class="active">Complete Your Account</li>
          <li class="active">licence Files</li>
          <li >achivement Files</li>

  </ul>




      </div>
<achive></achive>

  </div>
  </div>
  <div v-else>

   <nav class="navbar navbar-expand-lg navbar-dark bg-dark border-bottom ">
          <div class="container">
               <a class="nav-link text-light" href="" @click="logout"><i class="fa fa-power-off"></i>  Logout</a>
        </div>
      </nav>
      <div class="container text-center mt-5 mx-auto">
        <h2 class="text-center mb-4 "> Upload licence </h2>
   <ul class="progressbar">
          <li class="active">Rigester</li>
          <li class="active">Complete Your Account</li>
          <li >licence Files</li>
          <li >achivement Files</li>

  </ul>




      </div>
<FileUpload></FileUpload>

  </div>
    </div>

    <div v-else>

      <nav class="navbar navbar-expand-lg navbar-dark bg-dark border-bottom ">
          <div class="container">
               <a class="nav-link text-light" href="" @click="logout"><i class="fa fa-power-off"></i>  Logout</a>
        </div>
      </nav>
      <div class="container text-center mt-5 mx-auto">
        <h2 class="text-center mb-4 ">Complete Your Account</h2>
      <ul class="progressbar">
          <li class="active">Rigester</li>
          <li>Complete Your Account</li>
          <li>Upload Files</li>
          <li >achivement Files</li>


  </ul>




      </div>
        <complete></complete>

    </div>



    </div>
<div v-if="users.roles.name =='interior'">
    <div v-if="users.company !== null">
  <div v-if="users.companyfile!==null">
      <div v-if="users.achivement_file!==null">
interior

<div class="d-flex" id="wrapper" :class="{toggled : !toggled}" >

    <!-- Sidebar -->
    <div class="bg-light border-right" id="sidebar-wrapper" v-if="isLoggedIn">
      <div class="sidebar-heading">AMb</div>
      <div class="list-group list-group-flush">

         <router-link class="list-group-item list-group-item-action bg-light" :to="{name:'Dashboard'}">
             <i class="fa fa-tachometer fa-1x" aria-hidden="true"></i> Dashboard
             </router-link>
              <button class="list-group-item list-group-item-action bg-light" @click="AdsToggle = !AdsToggle" v-if="users.roles.name !=='user'">My Ads </button>
              <div :class="AdsToggle" class="ml-3">
         <router-link class="list-group-item list-group-item-action " :to="{name:'CoastVilla'}">
             <i class="fa fa-home fa-1x" aria-hidden="true"></i>
             villa with coast</router-link>

         <router-link class="list-group-item list-group-item-action " :to="{name:'FacedVilla'}"> <i class="fa fa-home fa-1x" aria-hidden="true"></i> Faced Villas </router-link>
</div>

         <router-link class="list-group-item list-group-item-action bg-light" :to="{name:'MyOffer'}">My Offer</router-link>
         <router-link class="list-group-item list-group-item-action bg-light" :to="{name:'Settings'}">Settings</router-link>



      </div>
    </div>

    <!-- /#sidebar-wrapper -->
    <!-- Page Content -->
    <div id="page-content-wrapper" >


      <nav class="navbar navbar-expand-lg navbar-dark bg-dark border-bottom ">
          <div class="container">
        <button class="btn text-light" id="menu-toggle" @click="toggled = !toggled" v-if="isLoggedIn"><i class="fa fa-bars "></i></button>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse " id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
            <li class="nav-item active"  v-if="isLoggedIn">
              <a class="nav-link" href="#"><i class="fa fa-bell text-light"></i> <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active"  v-if="isLoggedIn">
              <a class="nav-link" href="#"><i class="fa fa-envelope text-light"></i> <span class="sr-only">(current)</span></a>
            </li>
             <span class="nav-item" v-if="!isLoggedIn">
          <router-link :to="{name: 'login'}" class="nav-link">Sign-in</router-link>
        </span>
            <li class="nav-item" v-if="!isLoggedIn">

          <router-link :to="{name: 'Register'}" class="nav-link">Register</router-link>

            </li>
              <li class="nav-item" v-if="isLoggedIn">

          <router-link :to="{name: 'Projects'}" class="nav-link"> <i class="fa fa-cubes"></i> Projects  </router-link>

            </li>
              <span class="nav-item" v-if="isLoggedIn">
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">

                <user-profile
     :name="users.name"
      >

                </user-profile>
              </a>
              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                   <a class="dropdown-item" href="#">
                 <user-profile
     :name="users.email"
      >

                </user-profile>
                   </a>
                 <router-link class="dropdown-item" :to="{name:'profile'}"><i class="fa fa-user mr-1 "></i> profile</router-link>



                 <router-link class="dropdown-item" :to="{name:'Settings'}"><i class="fa fa-cog mr-1"></i> Settings</router-link>
                <div class="dropdown-divider"></div>

                 <a class="dropdown-item" href="" @click="logout">     <i class="fa fa-power-off mr-1"></i> Logout</a>
              </div>
            </li>
              </span>
          </ul>
        </div>
        </div>
      </nav>

      <router-view>

        </router-view>

    </div>







</div>
  </div>
  <div v-else>
 <nav class="navbar navbar-expand-lg navbar-dark bg-dark border-bottom ">
          <div class="container">
               <a class="nav-link text-light" href="" @click="logout"><i class="fa fa-power-off"></i>  Logout</a>
        </div>
      </nav>
      <div class="container text-center mt-5 mx-auto">
        <h2 class="text-center mb-4 ">File achivement </h2>
      <ul class="progressbar">
          <li class="active">Rigester</li>
          <li class="active">Complete Your Account</li>
          <li class="active">licence Files</li>
          <li >achivement Files</li>

  </ul>




      </div>
<achive></achive>

  </div>
  </div>
  <div v-else>

   <nav class="navbar navbar-expand-lg navbar-dark bg-dark border-bottom ">
          <div class="container">
               <a class="nav-link text-light" href="" @click="logout"><i class="fa fa-power-off"></i>  Logout</a>
        </div>
      </nav>
      <div class="container text-center mt-5 mx-auto">
        <h2 class="text-center mb-4 "> Upload licence </h2>
   <ul class="progressbar">
          <li class="active">Rigester</li>
          <li class="active">Complete Your Account</li>
          <li >licence Files</li>
          <li >achivement Files</li>

  </ul>




      </div>
<FileUpload></FileUpload>

  </div>
    </div>

    <div v-else>

      <nav class="navbar navbar-expand-lg navbar-dark bg-dark border-bottom ">
          <div class="container">
               <a class="nav-link text-light" href="" @click="logout"><i class="fa fa-power-off"></i>  Logout</a>
        </div>
      </nav>
      <div class="container text-center mt-5 mx-auto">
        <h2 class="text-center mb-4 ">Complete Your Account</h2>
      <ul class="progressbar">
          <li class="active">Rigester</li>
          <li>Complete Your Account</li>
          <li>Upload Files</li>
          <li >achivement Files</li>


  </ul>




      </div>
        <complete></complete>

    </div>



    </div>

<div v-if="users.roles.name =='construction'">
    <div v-if="users.company !== null">
  <div v-if="users.companyfile!==null">
      <div v-if="users.achivement_file!==null">


<div class="d-flex" id="wrapper" :class="{toggled : !toggled}" >

    <!-- Sidebar -->
    <div class="bg-light border-right" id="sidebar-wrapper" v-if="isLoggedIn">
      <div class="sidebar-heading">AMb</div>
      <div class="list-group list-group-flush">

         <router-link class="list-group-item list-group-item-action bg-light " :to="{name:'Dashboard'}">
             <img :src="'assets/img/dashboard.svg'" width="20" > <span class="font-weight-bold  ml-3"> Dashboard</span>
             </router-link>
             <router-link :to="{name: 'Projects'}" class="list-group-item list-group-item-action bg-light">
     <i class="fa fa-cubes main-color" style="font-size:20px"></i>  <span class="font-weight-bold  ml-3">Projects</span>  </router-link>

              <button class="list-group-item list-group-item-action bg-light" @click="AdsToggle = !AdsToggle" v-if="users.roles.name !=='user'">My Ads </button>
              <div :class="AdsToggle" class="ml-3">
         <router-link class="list-group-item list-group-item-action " :to="{name:'CoastVilla'}">
             <i class="fa fa-home fa-1x" aria-hidden="true"></i>
             villa with coast</router-link>

         <router-link class="list-group-item list-group-item-action " :to="{name:'FacedVilla'}"> <i class="fa fa-home fa-1x" aria-hidden="true"></i> Faced Villas </router-link>
</div>

         <router-link class="list-group-item list-group-item-action bg-light" :to="{name:'MyOffer'}">My Offer</router-link>
         <router-link class="list-group-item list-group-item-action bg-light" :to="{name:'Settings'}">Settings</router-link>



      </div>
    </div>

    <!-- /#sidebar-wrapper -->
    <!-- Page Content -->
    <div id="page-content-wrapper" >


      <nav class="navbar navbar-expand-lg navbar-dark bg-dark border-bottom ">
          <div class="container">
        <button class="btn text-light" id="menu-toggle" @click="toggled = !toggled" v-if="isLoggedIn"><i class="fa fa-bars "></i></button>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse " id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
            <li class="nav-item active"  v-if="isLoggedIn">
              <a class="nav-link" href="#"><i class="fa fa-bell text-light"></i> <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active"  v-if="isLoggedIn">
              <a class="nav-link" href="#"><i class="fa fa-envelope text-light"></i> <span class="sr-only">(current)</span></a>
            </li>
             <span class="nav-item" v-if="!isLoggedIn">
          <router-link :to="{name: 'login'}" class="nav-link">Sign-in</router-link>
        </span>
            <li class="nav-item" v-if="!isLoggedIn">

          <router-link :to="{name: 'Register'}" class="nav-link">Register</router-link>

            </li>

              <span class="nav-item" v-if="isLoggedIn">
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">

                <user-profile
     :name="users.name"
      >

                </user-profile>
              </a>
              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                   <a class="dropdown-item" href="#">
                 <user-profile
     :name="users.email"
      >

                </user-profile>
                   </a>
                 <router-link class="dropdown-item" :to="{name:'profile'}"><i class="fa fa-user mr-1 "></i> profile</router-link>



                 <router-link class="dropdown-item" :to="{name:'Settings'}"><i class="fa fa-cog mr-1"></i> Settings</router-link>
                <div class="dropdown-divider"></div>

                 <a class="dropdown-item" href="" @click="logout">     <i class="fa fa-power-off mr-1"></i> Logout</a>
              </div>
            </li>
              </span>
          </ul>
        </div>
        </div>
      </nav>

      <router-view>

        </router-view>

    </div>







</div>
  </div>
  <div v-else>
 <nav class="navbar navbar-expand-lg navbar-dark bg-dark border-bottom ">
          <div class="container">
               <a class="nav-link text-light" href="" @click="logout"><i class="fa fa-power-off"></i>  Logout</a>
        </div>
      </nav>
      <div class="container text-center mt-5 mx-auto">
        <h2 class="text-center mb-4 ">File achivement </h2>
      <ul class="progressbar">
          <li class="active">Rigester</li>
          <li class="active">Complete Your Account</li>
          <li class="active">licence Files</li>
          <li >achivement Files</li>

  </ul>




      </div>
<achive></achive>

  </div>
  </div>
  <div v-else>

   <nav class="navbar navbar-expand-lg navbar-dark bg-dark border-bottom ">
          <div class="container">
               <a class="nav-link text-light" href="" @click="logout"><i class="fa fa-power-off"></i>  Logout</a>
        </div>
      </nav>
      <div class="container text-center mt-5 mx-auto">
        <h2 class="text-center mb-4 "> Upload licence </h2>
   <ul class="progressbar">
          <li class="active">Rigester</li>
          <li class="active">Complete Your Account</li>
          <li >licence Files</li>
          <li >achivement Files</li>

  </ul>




      </div>
<FileUpload></FileUpload>

  </div>
    </div>

    <div v-else>

      <nav class="navbar navbar-expand-lg navbar-dark bg-dark border-bottom ">
          <div class="container">
               <a class="nav-link text-light" href="" @click="logout"><i class="fa fa-power-off"></i>  Logout</a>
        </div>
      </nav>
      <div class="container text-center mt-5 mx-auto">
        <h2 class="text-center mb-4 ">Complete Your Account</h2>
      <ul class="progressbar">
          <li class="active">Rigester</li>
          <li>Complete Your Account</li>
          <li>Upload Files</li>
          <li >achivement Files</li>


  </ul>




      </div>
        <complete></complete>

    </div>



    </div>
            <div v-else-if="users.roles.name =='admin'">

            <Admin></Admin>
            <router-view></router-view>
                 <footer class="main-footer">
        <strong>
          Copyright &copy; 2014-2021
          <a href="https://adminlte.io">AdminLTE.io</a>.
        </strong>
        All rights reserved.
        <div class="float-right d-none d-sm-inline-block">
          <b>Version</b> 3.1.0
        </div>
      </footer>
        </div>
    <div v-else-if="users.roles.name =='user'">
        <div class="mt-3 container">hello , {{users.name}}</div>
<div class="d-flex" id="wrapper" :class="{toggled : !toggled}" >

    <!-- Sidebar -->
    <div class="bg-light border-right" id="sidebar-wrapper" v-if="isLoggedIn">
      <div class="sidebar-heading">AMb</div>
      <div class="list-group list-group-flush">

         <router-link class="list-group-item list-group-item-action bg-light" :to="{name:'Dashboard'}">
             <i class="fa fa-tachometer fa-1x" aria-hidden="true"></i> Dashboard
             </router-link>



         <router-link class="list-group-item list-group-item-action bg-light" :to="{name:'mytenders'}">My Tenders</router-link>
         <router-link class="list-group-item list-group-item-action bg-light" :to="{name:'Settings'}">Settings</router-link>



      </div>
    </div>

    <!-- /#sidebar-wrapper -->
    <!-- Page Content -->
    <div id="page-content-wrapper" v-if="users.roles.name !=='admin'">


      <nav class="navbar navbar-expand-lg navbar-dark bg-dark border-bottom ">
          <div class="container">
        <button class="btn text-light" id="menu-toggle" @click="toggled = !toggled" v-if="isLoggedIn"><i class="fa fa-bars "></i></button>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse " id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
            <li class="nav-item active"  v-if="isLoggedIn">
             <notification-bar></notification-bar>
            </li>
            <li class="nav-item active"  v-if="isLoggedIn">
              <a class="nav-link" href="#"><i class="fa fa-envelope text-light"></i> <span class="sr-only">(current)</span></a>
            </li>
             <span class="nav-item" v-if="!isLoggedIn">
          <router-link :to="{name: 'login'}" class="nav-link">login</router-link>
        </span>
            <li class="nav-item" v-if="!isLoggedIn">

          <router-link :to="{name: 'Register'}" class="nav-link">Register</router-link>

            </li>
              <span class="nav-item" v-if="isLoggedIn">
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">

                <user-profile
     :name="users.name"
      >

                </user-profile>
              </a>
              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                   <a class="dropdown-item" href="#">
                 <user-profile
     :name="users.email"
      >

                </user-profile>
                   </a>
                 <router-link class="dropdown-item" :to="{name:'profile'}"><i class="fa fa-user mr-1 "></i> profile</router-link>



                 <router-link class="dropdown-item" :to="{name:'Settings'}"><i class="fa fa-cog mr-1"></i> Settings</router-link>
                <div class="dropdown-divider"></div>

                 <a class="dropdown-item" href="" @click="logout">     <i class="fa fa-power-off mr-1"></i> Logout</a>
              </div>
            </li>
              </span>
          </ul>
        </div>
        </div>
      </nav>

      <router-view>

        </router-view>

    </div>







</div>
        </div>


</div>



</template>

<script>
import { mapState, mapGetters } from "vuex";
import Admin from './admin/admin.vue';
import Achive from './auth/achive.vue';
import Complete from './auth/complete.vue';
import FileUpload from './auth/FileUpload.vue';
import Navbar from './auth/navbar.vue';
import NotificationBar from './notificationBar.vue';
import userProfile from './v-dash/users.vue';
export default {
     props:{email:String} ,
   components: {
    userProfile,
      Complete,
      FileUpload,
      Achive,
      NotificationBar,
      Admin,
      Navbar

  },

     data() {
     return{
        seen : true,
        users:null,
        toggled:true,
        AdsToggle:'d-none',
        StatusUser:null

        };
  },

  computed: {
    ...mapState({

      isLoggedIn: "isLoggedIn"
    }),
    ...mapGetters({

    }),

  },
   methods: {
     logout() {
      try {

        axios.post("/logout");

        this.$store.dispatch("logout");
        this.$router.push({ name: "login"});
      } catch (error) {
        this.$store.dispatch("logout");
      }
         location.reload();
    }
  },
    async created() {

        const  request = axios.get('/user').then(response=>{
        this.users= response.data;

        });

  this.companies = (await axios.get('/company/complete')).data;

    console.log(this.companies);



  }

};

</script>




<style>
textarea:focus,
textarea.form-control:focus,
input.form-control:focus,
input[type=text]:focus,
input[type=password]:focus,
input[type=email]:focus,
input[type=number]:focus,
[type=text].form-control:focus,
[type=password].form-control:focus,
[type=email].form-control:focus,
[type=tel].form-control:focus,
[contenteditable].form-control:focus {
  box-shadow: inset 0 -1px 0 #EB3349;

}
 .form-group .form-control{
     border-top:0;
     padding: 0;
     border-left:0;
     border-right:0;
     border-bottom:1px solid #c7c6c6;
         border-bottom-right-radius: 0;
     border-bottom-left-radius: 0;
     font-size: 14px;
 }
body{
    background: #eee
}
.btn-bus {background-image: linear-gradient(to right, #EB3349 0%, #F45C43  51%, #EB3349  100%)}
.btn-bus {
   margin: 10px;
   padding: 12px 20px!important;
   text-align: center;
    font-size: 14px;
   text-transform: uppercase;
   transition: 0.5s;
   background-size: 200% auto;
   color: white;
   box-shadow: 0 0 20px #eee;
       margin-top: 1.5rem!important;
   border-radius: 10px;
   display: block;
 }

 .btn-bus:hover {
   background-position: right center; /* change the direction of the change here */
   color: #fff;
 }
.main-color{
    color:#e74c3c
}

 #wrapper {
    overflow-x: hidden;
 }

#sidebar-wrapper {
  min-height: 100vh;
  margin-left: -15rem;
  -webkit-transition: margin .25s ease-out;
  -moz-transition: margin .25s ease-out;
  -o-transition: margin .25s ease-out;
  transition: margin .25s ease-out;
}

#sidebar-wrapper .sidebar-heading {
  padding: 0.875rem 1.25rem;
  font-size: 1.2rem;
}

#sidebar-wrapper .list-group {
  width: 15rem;
}

#page-content-wrapper {
  min-width: 100vw;
}

#wrapper.toggled #sidebar-wrapper {
  margin-left: 0;
}

.list-group-flush>.list-group-item {
    border-width: 0px 0 0px;
        margin-top: 1rem;
}
@media (min-width: 768px) {
  #sidebar-wrapper {
    margin-left: 0;
  }

  #page-content-wrapper {
    min-width: 0;
    width: 100%;
  }

  #wrapper.toggled #sidebar-wrapper {
    margin-left: -15rem;
  }
}
.progressbar {
      counter-reset: step;
  }
  .progressbar li {
      list-style-type: none;
      width: 24%;
      float: left;
      font-size: 12px;
      position: relative;
      text-align: center;
      text-transform: uppercase;
      color: #7d7d7d;
  }
  .progressbar li:before {
      width: 30px;
      height: 30px;
      content: counter(step);
      counter-increment: step;
      line-height: 30px;
      border: 2px solid #7d7d7d;
      display: block;
      text-align: center;
      margin: 0 auto 10px auto;
      border-radius: 50%;
      background-color: white;
  }
  .progressbar li:after {
      width: 100%;
      height: 2px;
      content: '';
      position: absolute;
      background-color: #7d7d7d;
      top: 15px;
      left: -50%;
      z-index: -1;
  }
  .progressbar li:first-child:after {
      content: none;
  }
  .progressbar li.active {
      color: #3490dc;
  }
  .progressbar li.active:before {
      border-color: #3490dc;
  }
  .progressbar li.active + li:after {
      background-color: #3490dc;
  }

a.router-link-exact-active{
    color:#e74c3c !important;
    background: #ddd !important;
}
a.router-link-active{
    color:#e74c3c !important;
     background: #ddd !important;
}

.badge-custom{
    background: #cef2ef;
    color:#00998c;
}

</style>
