<template>
    <nav id="navbar" class="navbar"> 
                    <ul> 
                        <li><router-link class="nav-link scrollto active" to="/#hero">Home</router-link>
                        </li>                         
                        <li><router-link  class="nav-link scrollto"to="/#about">About</router-link>
                        </li>                         
                        <li><router-link  class="nav-link scrollto"to="/#services">Services</router-link>
                        </li>                         
                        <li><router-link  class="nav-link   scrollto"to="/blog">Blogs</router-link>
                        </li>                         
                        <li><router-link  class="nav-link scrollto"to="/#team">Team</router-link>
                        </li>                         
                        <li><router-link  class="nav-link scrollto"to="/#contact">Contact</router-link>
                        </li>                         
                        <li><router-link  class="getstarted scrollto"to="/#about" target="_pg_blank">Get a quote</router-link>
                        </li>                         
                    </ul>                     <i class="fa fa-list mobile-nav-toggle"></i> 
                </nav>
</template>

<script>
    export default {
    }
</script>
