<div class="div">
    @include('livewire.modals.modal')
    <div class="container ">
        <div class="profile">
            <h2 class="mt-3 text-center" style="font-size: 23px; color:#f8f5f5;">{{Auth::user()->name}}'s Profile</h2>
        </div>
        <div class="post-body">
            <div class="col-md-6" style="width: 350px">
                <div class="shadow-md p-3 " id="write">
                    <button class="write-2 form-control" style="color:white;background-color: #638b33;" data-toggle="modal" data-target="#click">+ Create new talk</button>
                </div>
            </div>

            <div class="col-md-12  offset-1">
                @if (session('message'))
                    <div id="messagee" class="alert bg-success">{{ session('message') }}</div>
                @endif
                @foreach ($posts as $post)
                <div class="card shadow-md mt-3 {{ $post->user->gender === 'Female' ? 'f1' : 'm1' }}"  style="width: 900px">
                    <div class="card-header">
                        @if($post->isEditable())
                        <span id="dot-icon" class="float-end dropdown dropstart bg-danger">
                            <span class="fa-solid fa-edit text-light" type="button" data-bs-toggle="dropdown" aria-expanded="false"></span>
                            <ul class="dropdown-menu bg-warning">
                                <li><a class="dropdown-item" data-toggle="modal" data-target="#click-edit" wire:click="editPosts({{ $post->id }})">Edit</a></li>
                                <li><a class="dropdown-item" data-toggle="modal" data-target="#click-delete" wire:click="delete({{ $post->id }})">Delete</a></li>
                            </ul>
                        </span>
                        @endif
                        <span class="float-end" id="titlee">
                                <span class="float-end" id="titleee"><strong>{{ $post->title }}</strong></span>
                          </span>

                        <span class="time" style="position:relative; top: 10px; left: -50px;"><strong>{{ $post->created_at->format('g:i A') }}</strong></span>
                    </div>


                    <div class="card-footer">


                        <div class="float-center d-flex justify-content-center">
                        <img class="card" style="border-radius: 50%; width: 80px;" id="pf1"
                        src="{{ $post->user->gender === 'Male' ? asset('images/male.png') : asset('images/female.png') }}"
                        alt="photo">

                        </div>
                        <p class="text-center"><strong>{{ $post->user->name }}</strong></p>

                    </div>
                    <div class="card-body bg-secondary opacity-75">
                        <div class="contentt"><span class="text-light">{{ $post->content }}</span></div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        @if($posts->isEmpty())
            <div style="color: red">
                <h1 class="text-center mt-4" style="font-size: 30px;">No posts.</h1>
            </div>
        @endif
        <button onclick="topFunction()" id="myBtn" title="Back to top"><i class="fa-solid fa-arrow-up"></i></button>
    </div>
</div>

<style>

        .f1 {
            background-color: #FFD1DE;
        }
        .m1 {
            background-color: #ADDFFF;
        }

    #text-area {
        border: none;
        background-color: transparent;
        resize: none;
        outline: none;
        color: black;
    }
    .name {
        color: whitesmoke;
        font-size: 20px;
        text-decoration: none;
    }
    .name:hover {
        color: rgb(204, 202, 203);
    }
    #write {
      color: white;
    }
    .write-2 {
        border-radius: 20px;
        color: white;
    }
    .write-2:hover {
        background-color: rgba(181, 181, 181, 0.789);
    }
    #modall {

        margin-top: 20%;
    }
    .title1 {
        margin-left: 38%;
    }
    .title2 {
        margin-left: 35%;
    }
    .title3 {
        margin-left: 8%;
    }
    .close {
        border-radius: 50%;
        background-color: rgb(246, 10, 10);
        border: 1px solid rgb(9, 1, 1);
        width: 30px;
    }
    .close span {
        color: whitesmoke;
    }
    .close:hover {
        background-color: rgb(151, 24, 24);
    }
    #cardd {
        background-color: rgba(116, 115, 115, 0.661);
        color: whitesmoke;
    }
    .time {
        font-size: 13px;
        margin-left: 45px;
        opacity: 0.8;
    }
    .contentt span {
        font-size: 19px;
    }
    #titlee {
        color: rgb(21, 21, 103);
        font-weight: bold;
        font-style: normal;
        font-size: 14px;
        opacity: 0.8;
    }
    #titleee {
        margin-right: 15px;
        margin-top: 5px;
    }
    #genderr {
        color: rgb(21, 21, 103);
        font-weight: bold;
        font-style: italic;
        font-size: 13px;
        opacity: 0.8;
    }
    .alert {
        background-color: rgba(0, 0, 0, 0.12);
    }
    .form-select {
        background-color:#c6e3a4;
        color: rgb(13, 9, 9);
    }
    #myBtn {
        display: none;
        position: fixed;
        bottom: 20px;
        right: 40px;
        z-index: 99;
        font-size: 25px;
        border: none;
        outline: none;
        background-color: rgb(3, 126, 138);
        color: rgb(255, 255, 255);
        cursor: pointer;
        border-radius: 4px;
        padding: 5px 10px 5px 10px;
    }
    #myBtn:hover {
        background-color: rgb(12, 142, 154);
    }
    #lc {
        padding: 5px 50px 5px 50px;
        border-radius: 5px;
        cursor: pointer;
    }
    #lc:hover {
        background-color: rgba(89, 88, 88, 0.593);
    }

    .font-icon {
        font-size: 30px;
        border-radius: 50%;
        padding: 2px;
        opacity: 0.8;
        color: rgb(241, 241, 33);
    }
    .font-icon-heart {
        font-size: 30px;
        border-radius: 50%;
        padding: 2px;
        color: red;
        opacity: 0.8;
    }
    #dot-icon {
        padding: 5px 12px 5px 12px;
        background-color: rgb(206, 204, 204);
        border-radius: 50%;
        cursor: pointer;
    }
    #dot-icon:hover {
        background-color: rgb(230, 224, 224);;
    }
    #submit-button:disabled {
        cursor: not-allowed;
        pointer-events: all !important;
    }
    .profile2 {
        width: 40px;
        border: 1px solid rgb(66, 65, 65);
        padding: 4px;
        border-radius: 50%;
    }
</style>

<script>
    // Get the button
    let mybutton = document.getElementById("myBtn");

    // When the user scrolls down 20px from the top of the document, show the button
    // window.onscroll = function() {scrollFunction()};

    // function scrollFunction() {
    //     if (document.body.scrollTop > 400 || document.documentElement.scrollTop > 400) {
    //         mybutton.style.display = "block";
    //     } else {
    //         mybutton.style.display = "none";
    //     }
    // }
    function topFunction() {
        document.body.scrollTop = 0;
        document.documentElement.scrollTop = 0;
    }
    document.getElementById('submit-button').disabled = true;

    document.getElementById('text-area').addEventListener('keyup', e => {
   //Check for the input's value
    if (e.target.value == "") {
        document.getElementById('submit-button').disabled = true;
    } else {
        document.getElementById('submit-button').disabled = false;
    }
    });

</script>
