<div class="container ">
    @include('livewire.modals.modal')
    <div class="profile">
        <h2 class="mt-3 text-white" style="font-weight: 400; font-size: 30px;">Recent Talks</h2>
    </div>
    <div class="post-body">

        <div class="col-md-4">
            @if (session('message'))
                <div id="messagee" class="alert text-black text-center text-black">{{ session('message') }}</div>
            @endif
            <select class="form-select" wire:model.lazy="title">
                <option value="All">All</option>
            <option value="Business">Business</option>
            <option value="Education">Education</option>
            <option value="Comedy">Comedy</option>
            <option value="Drama">Drama</option>
            <option value="Horror">Horror</option>
            <option value="Politics">Politics</option>
            <option value="Religion">Religion</option>
            <option value="Romance">Romance</option>
            </select>
            <div class="col p-3 shadow-sm rounded mb-5" id="write">
                <input type="text" class="write-2 form-control w-100" placeholder="Search" wire:model.lazy="search">
            </div>

            <div class="col-md-12  offset-2">
                @if (session('message'))
                    <div id="messagee" class="alert text-black text-center text-black">{{ session('message') }}</div>
                @endif
            @foreach ($recents as $recent)
            <div class="card mt-3 {{ $recent->user->gender === 'Female' ? 'f1' : 'm1' }}" style="width: 900px">
                <div class="card-header">
                    <span class="float-end" id="titlee">
                        <span class="float-end" id="titleee">{{ $recent->title }}</span>
                        </span>

                        <div>
                        <span class="time" style="position:relative; top: 10px; left: -50px;"><strong>{{ $recent->created_at->format('g:i A') }}</strong></span>
                    </div>
                </div>

                <div class="card-footer">

                    <div class="float-center d-flex justify-content-center">
                    <img class="card" style="border-radius: 50%; width: 80px;" id="pf1"
                    src="{{ $recent->user->gender === 'Male' ? asset('images/male.png') : asset('images/female.png') }}"
                    alt="photo">

                    </div>
                    <p class="text-center"><strong>{{ $recent->user->name }}</strong></p>

                </div>
                <div class="card-body bg-secondary opacity-75">
                    <div class="contentt"><span class="text-light">{{ $recent->content }}</span></div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
    @if($recents->isEmpty())
        <div style="color:  red">
            <h1 class="text-center" style="font-size: 30px;">No posts.</h1>
        </div>
    @endif
    <button onclick="topFunction()" id="myBtn" title="Back to top"><i class="fa-solid fa-arrow-up"></i></button>
</div>

<style>


    .f1 {
            background-color: #FFD1DE;
        }
        .m1 {
            background-color: #ADDFFF;
        }

    .name {
        color: rgb(245, 245, 245);
        font-size: 20px;
        text-decoration: none;
        cursor: pointer;
    }
    .name:hover {
        color: rgb(204, 202, 202);
    }
    .form-select {
        background-color: #c6e3a4;
        color: rgb(13, 9, 9);
    }
    #cardd {

        color: whitesmoke;
    }
    .time {
        font-size: 13px;
        margin-left: 45px;
        opacity: 0.8;
    }
    .contentt span {
        font-size: 20px;
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
    #write {

    }
    .write-2 {
        border-radius: 20px;
    }
    #lc {
        padding: 5px 50px 5px 50px;
        border-radius: 5px;
        cursor: pointer;
    }
    #lc:hover {
        background-color: rgba(89, 88, 88, 0.593);
    }
    .male {
        background-color: rgb(5, 5, 147);
        padding: 3px;
        border-radius: 3px;
    }
    .female {
        background-color: rgb(243, 27, 239);
        padding: 3px;
        border-radius: 3px;
    }
    .bisexual {
        background-image: linear-gradient(to left, violet, indigo, blue, green, rgba(255, 255, 0, 0.275), rgba(255, 166, 0, 0.407), red);
        padding: 3px;
        color: rgb(229, 220, 229);
        border-radius: 3px;
    }
    .transgender {
        background-image: linear-gradient(to left, rgb(42, 162, 242), rgb(206, 115, 189),rgb(245, 229, 246), rgb(206, 115, 189), rgb(42, 162, 242));
        padding: 3px;
        color: rgb(23, 17, 84);
        border-radius: 3px;
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
    .profile2 {
        width: 40px;
        border: 1px solid rgb(66, 65, 65);
        padding: 4px;
        height: 40px;
        border-radius: 50%;
    }
</style>


<script>
    // Get the button
    let mybutton = document.getElementById("myBtn");

    // When the user scrolls down 20px from the top of the document, show the button
    // window.onscroll = function() {scrollFunction()};

    // function scrollFunction() {
    //   if (document.body.scrollTop > 400 || document.documentElement.scrollTop > 400) {
    //     mybutton.style.display = "block";
    //   } else {
    //     mybutton.style.display = "none";
    //   }
    // }

    // When the user clicks on the button, scroll to the top of the document
    function topFunction() {
      document.body.scrollTop = 0;
      document.documentElement.scrollTop = 0;
    }

    setTimeout(function() {
        var msg = document.getElementById("messagee");
        msg.parentNode.removeChild(msg);
    }, 1500);
</script>
