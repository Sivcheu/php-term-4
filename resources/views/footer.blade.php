<footer class="bg-light text-center mt-5">
    <div class="cs-footer">
        <div class="container px-4">
            <div class="row gx-5">
                <div class="col-lg-6 col-md-6 col-xs-12 mt-3">
                    <div class="p-3">
                        <div>
                            <a class="navbar-brand" href="{{ url('/home') }}">CamCharity</a>
                        </div>
                        <p class="footer-p">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt
                            ut labore et dolore magna aliqua.
                        </p>
                        <i class="fa fa-phone" aria-hidden="true">
                            <a href="tel:85570425858">: 070425858</a>
                        </i>
                        <div class="mt-2">
                            <i class="fa fa-envelope" aria-hidden="true">
                                <a href="mailto:Choeng.sivcheu02@gmail.com?subject = Feedback&body = Message">
                                    CamCharity@gmail.com
                                </a>
                            </i>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 col-md-6 col-xs-12mt-3">
                    <div class="p-3">
                        <h4>
                            feedback!
                        </h4>
                        <form action="/feedback" method="POST">
                            @csrf
                            <div class="mb-3 shadow">
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="feedback"></textarea>
                            </div>
                            <button type="submit" class="btn btn-success ">Feedback</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2)">
        © 2020 Copyright:
        <a class="text-dark" href="https://www.facebook.com/piggys.cheu">CamCharity</a>
    </div>

</footer>
