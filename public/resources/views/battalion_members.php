<x-layouts.mainLayout>


    <x-slot:pagetitle> <title> XIth Parachute Battalion Members</title></x-slot:pagetitle>
    <x-slot:specialstyling>

        <style>
            .holder {
                width: 90%;
                display: flex;
                flex-wrap: wrap;
                height: 150px;
                margin: auto;
                color:white;
                padding: 30px;
                border-radius: 20px ;
                background-color: #262135;
            }

            .member {
                max-width: 30%;
            }


            .circle{
                width:100px;
                height:100px;
                border-radius: 50%;
                border: 2px solid #874363;
                overflow: hidden;
            }

        </style>

    </x-slot:specialstyling>

    <x-slot:bodyclass>

    </x-slot:bodyclass>

    {{--Following x-slot:searchbox is not used here. It is to create a searchbox on the searchbox page which is a copy of the home page--}}
    <x-slot:searchbox>
    </x-slot:searchbox>
<x-slot:mainbody>


        <h1>XI<sp>th</sp> Parachute Battalion Members</h1><br>



        @foreach($members as $member)

        <div class="holder">

            <div  class="member">
                <a href="/battalion_members/{{ $member['id'] }}">
                    <?php $imageurl = asset('images');
                    $imageurl = $imageurl.'/'.$member['image'] ?>

                <div class="circle">
                        <img src="{{ $imageurl }}">
                </div>

            </div>

            <div style="margin-left: 30px">
                <h2>{{$member['firstname'].' '.$member['lastname']}}</h2>
                <h3>{{ $member['rank']}} </h3>
            </div>


            </a>

        </div>

            <br>

        @endforeach
        <br>
            {{ $members->links() }}


            </x-slot:mainbody>


    <br><br>


</x-layouts.mainLayout>




