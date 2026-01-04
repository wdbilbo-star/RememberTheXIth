<x-layouts.mainLayout>

<x-slot:pagetitle>
<title>Killed In Action</title>
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
        <h1>Killed In Action</h1>

        </div>
        <div class="container">
            <div class="quotes"><blockquote> Better to die fighting for freedom than be a prisoner all the days of your life. <span>Bob Marley</span></blockquote></div>
            <div class="quotes"> <blockquote> It takes a hero to be one of those men who goes into battle. <span> Norman Schwarzkopf Jr.</span></blockquote></div>
        </div>

    </x-slot:mainbody>


</x-layouts.mainLayout>
