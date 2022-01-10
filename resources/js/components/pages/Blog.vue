<template>
    <main id="main"> 
            <!-- ======= Breadcrumbs ======= -->             
            <section id="breadcrumbs" class="breadcrumbs"> 
                <div class="container"> 
                    <ol> 
                        <li><router-link  to="index.html">Home</router-link>
                        </li>                         
                        <li>Blogs</li>                         
                    </ol>                     
                    <h2>Blogs</h2> 
                </div>                 
            </section>
            <!-- End Breadcrumbs -->             
            <!-- ======= Blogs Details Section ======= -->             
            <section id="blog-details" class="blog-details"> 
                <div class="container"> 
                    <div class="blog-list">
                        <div class="row gy-4"> 
                            <div class="col-md-4"> 
                                <div class="blog-area h-100" data-aos="zoom-in" data-aos-delay="200">
                                    <router-link  to="" class="d-block"><img src="img/bravogroup-360x360.jpg" class="blog-img-top img-fluid" alt="..." width="700" height="480"/></router-link>
                                    <div class="blog-info"> 
                                        <p><i class="fas fa-th-large"> </i>News</p>
                                        <router-link :to="{ name: 'blogdetails', params: { blogid: 12344 }}" class="details-link" title="View Details"><i class="fas fa-eye"></i> </router-link> 
                                    </div>                                     
                                    <div class="blog-body"><router-link  to="" class="link-dark text-decoration-none"><h3 class="blog-title h4">Relaxing and observing the mountain reflection in a lake</h3></router-link>
                                        <p class="blog-text">Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint. Velit officia consequat duis enim velit mollit.</p>
                                    </div>
                                </div>
                            </div>                             
                            <div class="col-md-4"> 
                                <div class="blog-area h-100" data-aos="zoom-in" data-aos-delay="200">
                                    <router-link  to="" class="d-block"><img src="img/bravogroup-360x360.jpg" class="blog-img-top img-fluid" alt="..." width="700" height="480"/></router-link>
                                    <div class="blog-info"> 
                                        <p><i class="fas fa-th-large"> </i>News</p>
                                        <router-link :to="{ name: 'blogdetails', params: { blogid: 12344 }}" class="details-link" title="View Details"><i class="fas fa-eye"></i> </router-link> 
                                    </div>                                     
                                    <div class="blog-body"><router-link  to="" class="link-dark text-decoration-none"><h3 class="blog-title h4">Relaxing and observing the mountain reflection in a lake</h3></router-link>
                                        <p class="blog-text">Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint. Velit officia consequat duis enim velit mollit.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4"> 
                                <div class="blog-area h-100" data-aos="zoom-in" data-aos-delay="200">
                                    <router-link  to="" class="d-block"><img src="img/bravogroup-360x360.jpg" class="blog-img-top img-fluid" alt="..." width="700" height="480"/></router-link>
                                    <div class="blog-info"> 
                                        <p><i class="fas fa-th-large"> </i>News</p>
                                        <router-link :to="{ name: 'blogdetails', params: { blogid: 12344 }}" class="details-link" title="View Details"><i class="fas fa-eye"></i> </router-link> 
                                    </div>                                     
                                    <div class="blog-body"><router-link  to="" class="link-dark text-decoration-none"><h3 class="blog-title h4">Relaxing and observing the mountain reflection in a lake</h3></router-link>
                                        <p class="blog-text">Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint. Velit officia consequat duis enim velit mollit.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4"> 
                                <div class="blog-area h-100" data-aos="zoom-in" data-aos-delay="200">
                                    <router-link  to="" class="d-block"><img src="img/bravogroup-360x360.jpg" class="blog-img-top img-fluid" alt="..." width="700" height="480"/></router-link>
                                    <div class="blog-info"> 
                                        <p><i class="fas fa-th-large"> </i>News</p>
                                        <router-link :to="{ name: 'blogdetails', params: { blogid: 12344 }}" class="details-link" title="View Details"><i class="fas fa-eye"></i> </router-link> 
                                    </div>                                     
                                    <div class="blog-body"><router-link  to="" class="link-dark text-decoration-none"><h3 class="blog-title h4">Relaxing and observing the mountain reflection in a lake</h3></router-link>
                                        <p class="blog-text">Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint. Velit officia consequat duis enim velit mollit.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4"> 
                                <div class="blog-area h-100" data-aos="zoom-in" data-aos-delay="200">
                                    <router-link  to="" class="d-block"><img src="img/bravogroup-360x360.jpg" class="blog-img-top img-fluid" alt="..." width="700" height="480"/></router-link>
                                    <div class="blog-info"> 
                                        <p><i class="fas fa-th-large"> </i>News</p>
                                        <router-link :to="{ name: 'blogdetails', params: { blogid: 12344 }}" class="details-link" title="View Details"><i class="fas fa-eye"></i> </router-link> 
                                    </div>                                     
                                    <div class="blog-body"><router-link  to="" class="link-dark text-decoration-none"><h3 class="blog-title h4">Relaxing and observing the mountain reflection in a lake</h3></router-link>
                                        <p class="blog-text">Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint. Velit officia consequat duis enim velit mollit.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4"> 
                                <div class="blog-area h-100" data-aos="zoom-in" data-aos-delay="200">
                                    <router-link  to="" class="d-block"><img src="img/bravogroup-360x360.jpg" class="blog-img-top img-fluid" alt="..." width="700" height="480"/></router-link>
                                    <div class="blog-info"> 
                                        <p><i class="fas fa-th-large"> </i>News</p>
                                        <router-link :to="{ name: 'blogdetails', params: { blogid: 12344 }}" class="details-link" title="View Details"><i class="fas fa-eye"></i> </router-link> 
                                    </div>                                     
                                    <div class="blog-body"><router-link  to="" class="link-dark text-decoration-none"><h3 class="blog-title h4">Relaxing and observing the mountain reflection in a lake</h3></router-link>
                                        <p class="blog-text">Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint. Velit officia consequat duis enim velit mollit.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4"> 
                                <div class="blog-area h-100" data-aos="zoom-in" data-aos-delay="200">
                                    <router-link  to="" class="d-block"><img src="img/bravogroup-360x360.jpg" class="blog-img-top img-fluid" alt="..." width="700" height="480"/></router-link>
                                    <div class="blog-info"> 
                                        <p><i class="fas fa-th-large"> </i>News</p>
                                        <router-link :to="{ name: 'blogdetails', params: { blogid: 12344 }}" class="details-link" title="View Details"><i class="fas fa-eye"></i> </router-link> 
                                    </div>                                     
                                    <div class="blog-body"><router-link  to="" class="link-dark text-decoration-none"><h3 class="blog-title h4">Relaxing and observing the mountain reflection in a lake</h3></router-link>
                                        <p class="blog-text">Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint. Velit officia consequat duis enim velit mollit.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4"> 
                                <div class="blog-area h-100" data-aos="zoom-in" data-aos-delay="200">
                                    <router-link  to="" class="d-block"><img src="img/bravogroup-360x360.jpg" class="blog-img-top img-fluid" alt="..." width="700" height="480"/></router-link>
                                    <div class="blog-info"> 
                                        <p><i class="fas fa-th-large"> </i>News</p>
                                        <router-link :to="{ name: 'blogdetails', params: { blogid: 12344 }}" class="details-link" title="View Details"><i class="fas fa-eye"></i> </router-link> 
                                    </div>                                     
                                    <div class="blog-body"><router-link  to="" class="link-dark text-decoration-none"><h3 class="blog-title h4">Relaxing and observing the mountain reflection in a lake</h3></router-link>
                                        <p class="blog-text">Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint. Velit officia consequat duis enim velit mollit.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4"> 
                                <div class="blog-area h-100" data-aos="zoom-in" data-aos-delay="200">
                                    <router-link  to="" class="d-block"><img src="img/bravogroup-360x360.jpg" class="blog-img-top img-fluid" alt="..." width="700" height="480"/></router-link>
                                    <div class="blog-info"> 
                                        <p><i class="fas fa-th-large"> </i>News</p>
                                        <router-link :to="{ name: 'blogdetails', params: { blogid: 12344 }}" class="details-link" title="View Details"><i class="fas fa-eye"></i> </router-link> 
                                    </div>                                     
                                    <div class="blog-body"><router-link  to="" class="link-dark text-decoration-none"><h3 class="blog-title h4">Relaxing and observing the mountain reflection in a lake</h3></router-link>
                                        <p class="blog-text">Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint. Velit officia consequat duis enim velit mollit.</p>
                                    </div>
                                </div>
                            </div>                             
                            <nav aria-label="Blog navigation">
                                <ul class="justify-content-center  pagination">
                                    <li class="mx-1 page-item"><router-link  to="" class="pagination-link page-link">Previous</router-link>
                                    </li>
                                    <li class="mx-1 page-item"><router-link  to="" class="pagination-link page-link">1</router-link>
                                    </li>
                                    <li class="mx-1 page-item"><router-link  to="" class="pagination-link page-link">2</router-link>
                                    </li>
                                    <li class="mx-1 page-item"><router-link  to="" class="pagination-link page-link">3</router-link>
                                    </li>
                                    <li class="mx-1 page-item"><router-link  to="" class="pagination-link page-link">Next</router-link>
                                    </li>
                                </ul>
                            </nav>                             
                        </div>
                    </div>
                </div>                 
            </section>
            <!-- End Blog Details Section -->             
        </main>
</template>

<script>
    export default {
    }
</script>
