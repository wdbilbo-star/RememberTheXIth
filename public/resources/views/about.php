<x-layouts.mainLayout>

<x-slot:pagetitle>
<title>About Page</title>
</x-slot:pagetitle>

    <x-slot:specialstyling>
      <link rel="stylesheet"  href="{{ asset('css/flipover.css')}}" />

    </x-slot:specialstyling>
    {{--Following x-slot:searchbox is not used here. It is to create a searchbox on the searchbox page which is a copy of the home page--}}
    <x-slot:searchbox>
    </x-slot:searchbox>
    <x-slot:bodyclass>

    </x-slot:bodyclass>



    <x-slot:mainbody>





















        <div class="flex flex-col">
        <h1 class=" text-center mb-4 text-4xl font-bold tracking-tight text-heading md:text-5xl lg:text-6xl">About Page</h1>

        </div>


        <br>
        <div class="quotes"><blockquote class="text-xl italic font-semibold tracking-tight text-heading">
                "Those that fail to learn from history are doomed to repeat it" <span>Winston Churchill</span></blockquote></div>
        <br><br>
        <p class="mb-6 text-lg font-normal text-blue-50 lg:text-xl sm:px-16 xl:px-48">Winston Churchill led us through one of the most dramatic periods in history, when millions of people were killed,
            injured and left traumatised by one of the most brutal regimes in world history. We believe, like Churchill, that we can all learn from the actions taken by all
            people to combat this. We must answer five key questions: Who? Why? What? Where? When and How?</p>
        <hr><h1>Who, Why, What, Where, When and How?</h1>
        <h3>Hover over the image below:</h3>
        <div class="container">
            <div class="flip-card" >
                <div class="flip-card-inner">
                    <div class="flip-card-front">Who?
                    </div>
                    <div class="flip-card-back">

                        <p class="whowhyhow"> We are relatives and friends of 11<sup>th</sup> Battalion officers and servicemen, who have joined together to create
                            a permanent and living memorial to those who served in the battalion and, most especially those that fought for our freedom
                            not only in the battles in and around Arnhem and Oosterbeek in Gelderland, Netherlands but also other battles during
                            World War 2.</p>



                    </div>
                </div>
            </div>



            <div class="flip-card">
                <div class="flip-card-inner">
                    <div class="flip-card-front">
                        Why?
                    </div>
                    <div class="flip-card-back">
                        <h1>No Idea</h1>
                        <p>Somebody help Me</p>
                        <p>Please!!!!!!!</p>
                    </div>
                </div>
            </div>
            <div class="flip-card">
                <div class="flip-card-inner">
                    <div class="flip-card-front">
                        What?
                    </div>
                    <div class="flip-card-back">
                        <h1>No Idea</h1>
                        <p>Somebody help Me</p>
                        <p>Please!!!!!!!</p>
                    </div>
                </div>
            </div>
            <div class="flip-card">
                <div class="flip-card-inner">
                    <div class="flip-card-front">
                        Where?
                    </div>
                    <div class="flip-card-back">
                        <h1>No Idea</h1>
                        <p>Somebody help Me</p>
                        <p>Please!!!!!!!</p>
                    </div>
                </div>
            </div>
            <div class="flip-card">
                <div class="flip-card-inner">
                    <div class="flip-card-front">
                        When?
                    </div>
                    <div class="flip-card-back">
                        <h1>No Idea</h1>
                        <p>Somebody help Me</p>
                        <p>Please!!!!!!!</p>
                    </div>
                </div>
            </div>
            <div class="flip-card">
                <div class="flip-card-inner">
                    <div class="flip-card-front">
                        How?
                    </div>
                    <div class="flip-card-back">
                        <h1>No Idea</h1>
                        <p>Somebody help Me</p>
                        <p>Please!!!!!!!</p>
                    </div>
                </div>
            </div>
        </div>


    </x-slot:mainbody>


</x-layouts.mainLayout>
