<div class="container-fluid pt-5 pb-2 px-0 wow fadeInUp" data-wow-delay="0.1s">
    <div class="bg-dark d-flex align-items-center">
        <div class="p-5 wow fadeInUp" data-wow-delay="0.2s">
            <h5 class="section-title ff-secondary text-start text-primary fw-normal">Comments</h5>
            <h1 class="text-white mb-4">Support Us by Some Comments</h1>
            <form>
                <div class="row g-3">
                    <div class="form-floating col-md-6">
                        <input type="text" class="form-control rounded" id="nama" placeholder="Your name here">
                        <label for="nama">Your name</label>
                    </div>
                    <div class="form-floating col-md-6">
                        <input type="email" class="form-control" id="email" placeholder="example@example.com">
                        <label for="email">Email Address</label>
                    </div>

                    <div class="col-12">
                        <div class="form-floating">
                            <textarea class="form-control" placeholder="Special Request" id="message" style="height: 100px"></textarea>
                            <label for="message">Some comments</label>
                        </div>
                    </div>
                    <div class="col-12">
                        <button class="btn btn-outline-primary w-100 py-3" type="submit">Submit</button>
                    </div>
                    </input>
            </form>

            <div class="modal fade" id="videoModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content rounded-0">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Youtube Video</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            16:9 aspect ratio
                            <div class="ratio ratio-16x9">
                                <iframe class="embed-responsive-item" src="" id="video" allowfullscreen
                                    allowscriptaccess="always" allow="autoplay"></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php /**PATH D:\Laravel\eal\resources\views/components/comments.blade.php ENDPATH**/ ?>