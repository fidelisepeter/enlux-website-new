<template>
    <!-- ======= Header ======= -->         
        <header id="header" class="fixed-top "> 
            <div class="container d-flex align-items-center"> <router-link  to="index.html" class="logo me-auto"><img src="img/logo-transperent.png" alt="" class="img-fluid"/></router-link> 
                <navbar/>                 
            </div>             
        </header>
        <!-- End Header --> 

        </template> 

<script>
import Navbar from "@/components/layout/Navbar";
    export default {
        components: {
            Navbar
  }
    }
</script>
