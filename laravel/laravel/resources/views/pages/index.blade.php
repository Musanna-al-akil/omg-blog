@extends('layouts.app')

@section('content')
 <div >
  <div id="wrapper">
    <div id="slider-area" class="owl-carousel owl-theme">
      <div class="slid1"  >
        <p class="twe1">We are hard, We pay Hard</p>
        <h1 class="twe">We are a design & development agency.</h1>
        <p class="twt2" >Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>  
      </div>
      <div  style="background-image: url(/storage/slide/3.jpg)">
         <p class="twe1">We are hard, We pay Hard</p>
         <h2 class="twe">We are a design & development agency.</h2>
         <p class="twt2" >Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>  
      </div>
        <div style="background-image: url(storage/slide/1.jpg)">
          <p class="twe1">We are hard, We pay Hard</p>
          <h2 class="twe">We are a design & development agency.</h2>
          <p class="twt2" style=" " >Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p> 
        </div>
    </div>

</div>

      <div class="bbb1">
        <div class="ab"> 
            
   @if(count($post2s) > 0)
       @foreach($post2s as $post)
            <div class="well">
                <div  style="boader:4px">
                	<div class="posta">
                    <p>ABOUT OUR HISTORY</p>
                    <h3 class="we">{{$post->title}}</h3>
                  
                    <p class="Sed">{!!$post->body!!}</p>
                    <BR>
                    <BR>
                    <P> <a href="/about">READ MORE</a></P>
                    <div class="darkc"></div>

                </div>
           
            </div>


        @endforeach
        {{$post2s->links()}}
     @else
         <p>No posts found</p>
    @endif
</div>
</div>

<div class="bgi3">
  <div id="wrappera">
    <div id="slider-areaa" class="owl-carousel">
      <div class="ooo" >
        <h3>“ Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam ”</h3>
        <p>- JIMMY FERRARA , General Manager</p></div>
         <div class="ooo"   >
           <h3>“ Lorem ipsum dolor sit amet, consectetur adipisicing elit,</h3>
           <p>- JIMMY FERRARA , </p></div>
         <div class="ooo"  >
           <h3>pisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad </h3>
           <p>RA , General Manage</p></div>
    </div>
    
</div>
</div>
</div>
        
        <div>
          <div class="bgi4">
            <div>
       
              <p class="Our">Our Awesome Work</p>
              <h1 class="Our1">Our Latest Project</h1>
        </div>
        <div class="All">

          <a class="button secondary url one" href="#all">All</a> 
          <a class="button secondary url two" href="#web_design">Web Design</a> 
          <a class="button secondary url three" href="#graphic_deisgn">Graphic Deisgn</a> 
          <a class="button secondary url four" href="#branding">Branding</a> 
          <a class="button secondary url five" href="#marketing">Marketing</a> 
                     </div>      
    <!-- title -->
 

    <!--  Demos -->
    <section >
      <div >
        <div>
          <div class="owl-carousel ">

            <div  class="item" data-hash="all">
             
              <div class="img1"> <div class="imageBox"> <img  src="/storage/home_bgi/img1.jpg">
                <div class="textBox">
                 <a href="/storage/home_bgi/img1.jpg"> <h2>&f06e</h2></a>
                 <a href="/storage/home_bgi/img1.jpg"> <h1>&copy</h1></a></div>
            </div></div>

           <div class="img2"> <div class="imageBox"> <img  src="/storage/home_bgi/img2.jpg">
           <div class="textBox">
             <h2>Book Cover Design</h2></div>
            </div></div>

           <div class="img3 "><div class="imageBox">  <img  src="/storage/home_bgi/img3.jpg">
            <div class="textBox">
              <h2>Book Cover Design</h2></div>
            </div></div>

           <div class="img4 "><div class="imageBox">  <img src="/storage/home_bgi/img4.jpg"> 
            <div class="textBox">
              <h2>Book Cover Design</h2></div>
            </div></div>

           <div class="img5 "><div class="imageBox">  <img src="/storage/home_bgi/img5.jpg">
            <div class="textBox">
              <h2>Book Cover Design</h2></div>
            </div></div>

           <div class="img6 "><div class="imageBox">  <img src="/storage/home_bgi/img6.jpg">
            <div class="textBox">
              <h2>Book Cover Design</h2></div>
            </div></div>
         
        </div>
        <div class="item" data-hash="web_design">
           <div class="img1"><div class="imageBox">  <img src="/storage/home_bgi/img6.jpg">
            <div class="textBox">
              <h2>Book Cover Design</h2></div>
            </div></div>

           <div class="img2"><div class="imageBox">  <img src="/storage/home_bgi/img5.jpg">
            <div class="textBox">
              <h2>Book Cover Design</h2></div>
            </div></div>

           <div class="img3"><div class="imageBox">  <img src="/storage/home_bgi/img1.jpg">
            <div class="textBox">
              <h2>Book Cover Design</h2></div>
            </div></div>

           <div class="img4"><div class="imageBox">  <img src="/storage/home_bgi/img4.jpg">
            <div class="textBox">
              <h2>Book Cover Design</h2></div>
            </div></div>

           <div class="img5"><div class="imageBox">  <img src="/storage/home_bgi/img2.jpg">
            <div class="textBox">
              <h2>Book Cover Design</h2></div>
            </div></div>

           <div class="img6"><div class="imageBox">  <img src="/storage/home_bgi/img3.jpg">
            <div class="textBox">
              <h2>Book Cover Design</h2></div>
            </div></div>

        </div>
        <div class="item" data-hash="graphic_deisgn">
           <div class="img1"><div class="imageBox">  <img src="/storage/home_bgi/img4.jpg">
            <div class="textBox">
              <h2>Book Cover Design</h2></div>
            </div></div>

           <div class="img2"><div class="imageBox">  <img src="/storage/home_bgi/img2.jpg">
            <div class="textBox">
              <h2>Book Cover Design</h2></div>
            </div></div>

           <div class="img3"><div class="imageBox">  <img src="/storage/home_bgi/img3.jpg">
            <div class="textBox">
              <h2>Book Cover Design</h2></div>
            </div></div>

           <div class="img4"><div class="imageBox">  <img src="/storage/home_bgi/img5.jpg">
            <div class="textBox">
              <h2>Book Cover Design</h2></div>
            </div></div>

           <div class="img5"><div class="imageBox">  <img src="/storage/home_bgi/img1.jpg">
            <div class="textBox">
              <h2>Book Cover Design</h2></div>
            </div></div>

           <div class="img6"><div class="imageBox">  <img src="/storage/home_bgi/img6.jpg">
            <div class="textBox">
              <h2>Book Cover Design</h2></div>
            </div></div>

        </div>
            <div class="item" data-hash="branding">
           <div class="img1"><div class="imageBox">  <img src="/storage/home_bgi/img6.jpg">
            <div class="textBox">
              <h2>Book Cover Design</h2></div>
            </div></div>

           <div class="img2"><div class="imageBox">  <img src="/storage/home_bgi/img2.jpg">
            <div class="textBox">
              <h2>Book Cover Design</h2></div>
            </div></div>

           <div class="img3"><div class="imageBox">  <img src="/storage/home_bgi/img3.jpg">
            <div class="textBox">
              <h2>Book Cover Design</h2></div>
            </div></div>

           <div class="img4"><div class="imageBox">  <img src="/storage/home_bgi/img5.jpg">
            <div class="textBox">
              <h2>Book Cover Design</h2></div>
            </div></div>

           <div class="img5"><div class="imageBox">  <img src="/storage/home_bgi/img4.jpg">
            <div class="textBox">
              <h2>Book Cover Design</h2></div>
            </div></div> 

           <div class="img6"><div class="imageBox">  <img src="/storage/home_bgi/img1.jpg">
            <div class="textBox">
              <h2>Book Cover Design</h2></div>
            </div></div>

            </div>
            <div class="item" data-hash="marketing">
       
           <div class="img1"><div class="imageBox">  <img src="/storage/home_bgi/img2.jpg">
            <div class="textBox">
              <h2>Book Cover Design</h2></div>
            </div></div>
           <div class="img2"><div class="imageBox">  <img src="/storage/home_bgi/img1.jpg">
            <div class="textBox">
              <h2>Book Cover Design</h2></div>
            </div></div>

           <div class="img3"><div class="imageBox">  <img src="/storage/home_bgi/img3.jpg">
            <div class="textBox">
              <h2>Book Cover Design</h2></div>
            </div></div>

           <div class="img4"><div class="imageBox">  <img src="/storage/home_bgi/img4.jpg">
            <div class="textBox">
              <h2>Book Cover Design</h2></div>
            </div></div>

           <div class="img5"><div class="imageBox">  <img src="/storage/home_bgi/img5.jpg">
            <div class="textBox">
              <h2>Book Cover Design</h2></div>
            </div></div>

           <div class="img6"><div class="imageBox">  <img src="/storage/home_bgi/img6.jpg">
            <div class="textBox">
              <h2>Book Cover Design</h2></div>
            </div></div>

            </div>
          </div>
       </div>
     </div>
  </section>
</div> 
 
</div>

    <div class="bgi5">
      <div class="bgi5i">
        <p class="Achievement">Our’s Achievement</p>
        <h4 class="world">4578+ Project Complited Hole Over the world</h4>
        <h4 id="client"><b>2228</b></h4><p>Clients</p>
        <h5 id="member"><b>3363</b></h5><p>Members</p>
        <h5 id="award"><b>106</b></h5><p>Awards</p>
      </div>  
    </div>
           
    <div class="bgi6">
      <h6>sadfeaf</h6>
    </div>
   
</div>
   @endsection
