<x-layouts.mainLayout>

    <x-slot:pagetitle> <title>{{ $member['rank'].' '.$member['lastname']}}</title>  </x-slot:pagetitle>

       <x-slot:specialstyling>

          <link rel="stylesheet"  href="{{ asset('css/battalion_members.css')}}" />


       </x-slot:specialstyling>

    {{--Following x-slot:searchbox is not used here. It is to create a searchbox on the searchbox page which is a copy of the home page--}}
    <x-slot:searchbox>
    </x-slot:searchbox>
    <x-slot:bodyclass>

    </x-slot:bodyclass>


    <x-slot:mainbody>


<br><br><br>


        <?php $imageurl = asset('images');
            $imageurl = $imageurl.'/'.$member['image'] ?>


        <div class="batt-container" style="font-size: 1vh">
            <div class="batt-flip-card" >
                <div class="batt-flip-card-inner">
                    <div class="batt-flip-card-front">
                        <img src=" {{ $imageurl }} "  style="max-height: 97%; max-width: 97%; margin: auto" {{--class="batt"--}} alt="The Officers and Men of the XIth Parachute Battalion February 1944" />
                    </div>
                    <div class="bottom-left" style="font-size: 2vh"> {{ $member['rank'].' '.$member['firstname'].' '.$member['middlename'].' '.$member['lastname'] }}</div>
                    <div class="batt-flip-card-back">

                        <div style="width: 50%">

                            <img src="{{ asset('images/verticalLine.svg') }}" style="height:100%; float: right">
                                    lkzfvldfbj;dlfkgjdaf;lgkjdf;lgkjdf;gjdf;glj

                        </div>

                        <div style="width: 50%">

                            <img src="{{ asset('images/stamp.png') }}"  alt="The Officers and Men of the XIth Parachute Battalion February 1944" style="width: 15%; float: right; margin-right: 2vw" />
                            <p class="batt"> {{ $member['rank'].' '.$member['firstname'].' '.$member['middlename'].' '.$member['lastname'] }}<br>

                                Born: {{date_format($date=date_create($member['birthdate']),"d M Y")}} <br>Died: {{date_format($date=date_create($member['deathdate']),"d M Y")}}<br>

                                 Age at death:

                                <?php $datetime1 = new DateTime($member['birthdate']);
                                $datetime2 = new DateTime($member['deathdate']);
                                $interval = $datetime1->diff($datetime2);
                                echo $interval->format('%y years %m months and %d days');
                                 ?>

                                <br>
                            </p>

                        <h4> About {{$member['firstname']}}</h4> <p class="batt"> {{ $member['lifestory'] }}



                        </div>
                    </div>
                </div>
            </div>
        </div>

    </x-slot:mainbody>

<x-slot:footerbody>


</x-slot:footerbody>



</x-layouts.mainLayout>

