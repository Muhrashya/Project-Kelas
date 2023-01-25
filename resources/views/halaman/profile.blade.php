<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Profile</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container rounded bg-white mt-5 mb-5">
        <div class="row">
            <div class="col-md-3 border-right">
                <div class="d-flex flex-column align-items-center text-center p-3 py-5"><img class="rounded-circle mt-5"
                        width="150px"
                        src="https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg"><span
                        class="font-weight-bold">Edogaru</span><span
                        class="text-black-50">edogaru@mail.com.my</span><span> </span></div>
            </div>
            <div class="col-md-5 border-right">
                <div clasts="p-3 py-5">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <h4 class="text-right">Profile Settings</h4>
                    </div>
                        <form action="/profile/create" method="POST" enctype="multipart/form-data">
                        @csrf
                                {{-- <div class="row mt-2">
                        <div class="col-md-12"><label class="labels">Name</label><input type="text"
                                class="form-control" placeholder="first nama" value=""></div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-md-12"><label class="labels" name="alamat" id="alamat">Alamat</label><input
                                type="text" name="alamat" id="alamat" class="form-control"
                                placeholder="enter your address" value="">
                        </div>
                        <div class="col-md-12"><label class="labels">Email</label><input type="text" name="email"
                                id="email" class="form-control" placeholder="enter  your email" value="">
                        </div> --}}
                        {{-- <div class="col-md-12"><label class="labels">Role</label><input type="text" name="role"
                                id="role" class="form-control" placeholder="admin/ user" value=""></div> --}}
                                <div class="col-md-12"><label class="labels" name="alamat" id="alamat">Alamat</label><input
                                    type="text" name="alamat" id="alamat" class="form-control"
                                    placeholder="enter your address" value="">
                        <div class="col-md-12"><label class="labels">No hp</label><input type="number" name="nohp"
                                id="nohp" class="form-control" placeholder="enter your number" value="">
                        </div>
                    </div>
                        </form>

                    <div class="mt-5 text-center"><button class="btn btn-primary profile-button" type="button">Save
                            Profile</button></div>
                </div>
            </div>

        </div>
    </div>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"
        integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous">
    </script>
    @include('sweetalert::alert')
</body>

</html>
