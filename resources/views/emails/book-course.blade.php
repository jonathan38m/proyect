@component('mail::message')
# Regards,

A new reservation on the site: {{ config('app.url') }}


@if ( intval($request->payment_method) == 1 && !$request->pay)
<hr/>
The payment was not successful
@endif

<hr/>

# Locations
<?php $vistoUIO= "--"; ?>
@if ($request->locationsQuito=="Quito")
<?php  $vistoUIO= "x"; ?>
@endif

<?php $vistoOta="--";?>
@if ($request->locationsOtavalo=="Otavalo")
<?php $vistoOta="x";?>
@endif

<?php $vistoAma="--";?>
@if ($request->locationsAmazon=="Amazon Jungle")
<?php $vistoAma="x";?>
@endif


@component('mail::table')
|    Select     |    Location     |       From                        |                      Weeks              |
| ------------------|-------------------|-------------------------------------------|:---------------------------------------------:|
|  {{ $vistoUIO }}  |   Quito         |     {{ $request->dateQuitoFrom }}     |      {{ $request->weekslocationsQuito }}  |
|  {{ $vistoOta }}  |   Otavalo       |     {{ $request->dateOtavaloFrom }}     |      {{ $request->weekslocationsOtavalo }}  |
|  {{ $vistoAma }}  |  Amazon Jungle  |     {{ $request->dateAmazonJungleFrom }}  |      {{ $request->weeksAmazonJungle }}    |
@endcomponent


<?php $vistoIC= "--"; ?>
@if ($request->locationsIndigenous=="Indigenous Community")
<?php  $vistoIC= "x"; ?>
@endif
<?php $optionsIndigenous= "--"; ?>
@switch($request->optionsIndigenousCommunity)
@case(1)
<?php  $optionsIndigenous= "Andean Indigenous Community"; ?>
@break

@case(2)
<?php  $optionsIndigenous= "Shuar Indigenous Community"; ?>
@break
@endswitch


<?php $vistoG= "--"; ?>
@if ($request->locationsGalapagos=="Galapagos Islands")
<?php  $vistoG= "x"; ?>
@endif
<?php $optionsGalapagos= "--"; ?>
@switch($request->optionsGalapagosIslands)
@case(1)
<?php  $optionsGalapagos= "7-Day Spanish Immersion in the Galapagos Islands"; ?>
@break

@case(2)
<?php  $optionsGalapagos= "14-Day Discovering Galapagos Spanish Program"; ?>
@break

@case(3)
<?php  $optionsGalapagos= "14-Day Exploring the Galapagos Islands Spanish Program"; ?>
@break

@case(4)
<?php  $optionsGalapagos= "11-Day Enchanting Galapagos Spanish Program"; ?>
@break
@endswitch

<?php $vistoTC= "--"; ?>
@if ($request->locationsTravelling=="Travelling Classroom")
<?php  $vistoTC= "x"; ?>
@endif
<?php $optionsTClassroom= "--"; ?>
@switch($request->optionsTravellingClassroom)
@case(1)
<?php  $optionsTClassroom= " Andes Amazon 7 Days"; ?>
@break

@case(2)
<?php  $optionsTClassroom= "Andes Amazon 12 Days"; ?>
@break

@case(3)
<?php  $optionsTClassroom= "Walking Through the Andes 12 Days"; ?>
@break

@case(4)
<?php  $optionsTClassroom= "Experience Ecuador 16 Days"; ?>
@break

@case(5)
<?php  $optionsTClassroom= "Exploring Ecuador 19 Days"; ?>
@break

@case(6)
<?php  $optionsTClassroom= "Charles Darwin & The Secrets of Evolution 15 Days"; ?>
@break
@endswitch



<?php $vistoP= "--"; ?>
@if ($request->locationsPackege=="Interactive Package")
<?php  $vistoP= "x"; ?>
@endif
<?php $optionsIPackage= "--"; ?>
@switch($request->optionsInteractivePackage)
@case(1)
<?php  $optionsIPackage= " Package 1"; ?>
@break

@case(2)
<?php  $optionsIPackage= " Package 2"; ?>
@break

@case(3)
<?php  $optionsIPackage= " Package 3"; ?>
@break

@case(4)
<?php  $optionsIPackage= " Package 4"; ?>
@break

@case(5)
<?php  $optionsIPackage= " Package 5"; ?>
@break

@case(6)
<?php  $optionsIPackage= " Package 6"; ?>
@break

@case(7)
<?php  $optionsIPackage= " Package 7"; ?>
@break

@case(8)
<?php  $optionsIPackage= " Package 8"; ?>
@break

@case(9)
<?php  $optionsIPackage= " Package 9"; ?>
@break

@case(10)
<?php  $optionsIPackage= " Package 10"; ?>
@break

@endswitch


@component('mail::table')
|    Select    |    Location            |   Option        |         From                          |                      Weeks              |
| -------------- |------------------------------|---------------------------|---------------------------------------------------|:---------------------------------------------:|
| {{ $vistoIC }} |   Indigenous Community       | {{ $optionsIndigenous }}  | {{ $request->dateIndigenousCommunityFrom }}   |{{ $request->dateIndigenousCommunityFrom }}
|  {{ $vistoG }} |   Galapagos Islands        | {{ $optionsGalapagos }}   |   {{ $request->dateGalapagosIslandsFrom }}    |
| {{ $vistoTC }} |  Travelling Classroom    | {{ $optionsTClassroom }}  |   {{ $request->dateTravellingClassroomFrom  }}  |
|  {{ $vistoP }} |  Interactive Package     | {{ $optionsIPackage }}  |   {{ $request->dateInteractivePackageFrom }}    |
@endcomponent


<hr/>

@if($request->locationsQuito == "Quito" || $request->locationsOtavalo =="Otavalo" )

# Course

<?php $vistoCourse= "--"; ?>
@if ($request->groupCourses=="Group Classes")
<?php  $vistoCourse= "x"; ?>
@endif
<?php $optionsGrCourse= "--"; ?>
@switch($request->optionsGroupClasses)
@case(1)
<?php  $optionsGrCourse= "20 hours per week"; ?>
@break
@default
@endswitch


<?php $vistoPrCourse= "--"; ?>
@if ($request->privateCourses=="Private Courses")
<?php  $vistoPrCourse= "x"; ?>
@endif
<?php $optionsPrCourse= "--"; ?>
@switch($request->optionsPrivateCourses)
@case(1)
<?php  $optionsPrCourse= "20 hours per week"; ?>
@break

@case(2)
<?php  $optionsPrCourse= "25 hours per week"; ?>
@break

@case(3)
<?php  $optionsPrCourse= "30 hours per week"; ?>
@break

@case(4)
<?php  $optionsPrCourse= "35 hours per week"; ?>
@break
@endswitch


<?php $vistoCbCourse= "--"; ?>
@if ($request->combinedCourse=="Combined Course")
<?php  $vistoCbCourse= "x"; ?>
@endif
<?php $optionsCbCourse= "--"; ?>
@switch($request->optionsCombinedCourse)
@case(1)
<?php  $optionsCbCourse= "20 + 10 hours per week"; ?>
@break

@case(2)
<?php  $optionsCbCourse= "20 + 15 hours per week"; ?>  </p>
@break
@endswitch


<?php $vistoSPCourse= "--"; ?>
@if ($request->semiPrivate=="Semi-Private")
<?php  $vistoSPCourse= "x"; ?>
@endif
<?php $optionsSPCourse= "--"; ?>
@switch($request->optionsSemiPrivate)
@case(1)
<?php  $optionsSPCourse= "20 hours per week"; ?>
@break

@case(2)
<?php  $optionsSPCourse= "25 hours per week"; ?>
@break

@case(3)
<?php  $optionsSPCourse= "30 hours per week"; ?>
@break

@endswitch


<?php $vistoSMedicine= "--"; ?>
@if ($request->spanishMedicine=="Spanish for Medicine")
<?php  $vistoSMedicine= "x"; ?>
@endif
<?php $optionsSMedicine= "--"; ?>
@switch($request->optionsSpanishMedicine)
@case(1)
<?php  $optionsSMedicine= "20 hours per week"; ?>
@break
@endswitch



<?php $vistoDExam= "--"; ?>
@if ($request->deleExam=="DELE Exam Preparation")
<?php  $vistoDExam= "x"; ?>
@endif
<?php $optionsDExam= "--"; ?>
@switch($request->optionsDeleExam)
@case(1)
<?php $optionsDExam= "20 hours per week"; ?>
@break
@endswitch


<?php $vistoSProfessionals= "--"; ?>
@if ($request->spanishProfessionals=="Spanish for Professionals")
<?php  $vistoSProfessionals= "x"; ?>
@endif
<?php $optionsSProfessionals= "--"; ?>
@switch($request->optionsSpanishProfessionals)
@case(1)
<?php $optionsSProfessionals= "20 hours per week"; ?>
@break
@endswitch

@component('mail::table')
|    Select           |   Course            |   Option            |         Week                          |
| --------------------------|-----------------------------|---------------------------------|:-------------------------------------------:|
| {{ $vistoCourse }}      |   Group Classes       | {{ $optionsGrCourse }}      | {{ $request->weeksGroupClasses }}         |
| {{ $vistoPrCourse }}    |   Private Courses       | {{ $optionsPrCourse }}      |   {{ $request->weeksPrivateCourses }}     |
| {{ $vistoCbCourse }}    |   Combined Course       | {{ $optionsCbCourse }}      |   {{ $request->weeksCombinedCourse }}     |
| {{ $vistoSPCourse }}    |   Semi-Private        | {{ $optionsSPCourse }}      |   {{ $request->weeksSemiPrivate }}      |
| {{ $vistoSMedicine }}   |   Spanish for Medicine    | {{ $optionsSMedicine }}     |   {{ $request->weeksSpanishMedicine }}    |
| {{ $vistoDExam }}     |   DELE Exam Preparation   | {{ $optionsDExam }}       |   {{ $request->weeksDeleExam }}       |
| {{ $vistoSProfessionals }}|   Spanish for Professionals | {{ $optionsSProfessionals }}  |   {{ $request->weeksSpanishProfessionals }} |

@endcomponent


@component('mail::table')
|         Comments          |
| :------------------------------------:|
| {{ $request->commentsLocations }} |

@endcomponent

<hr/>

@endif

# Previous Knowledge of Spanish


<?php $optionsPreviousKnoweledge= "--"; ?>
@switch($request->knowledgeSpanish)
@case(1)
<?php  $optionsPreviousKnoweledge= "Absolute Beginner A0"; ?>
@break

@case(2)
<?php  $optionsPreviousKnoweledge= "Beginner A1"; ?>
@break

@case(3)
<?php  $optionsPreviousKnoweledge= "Elementary A2"; ?>
@break

@case(4)
<?php  $optionsPreviousKnoweledge= "Intermediate B1"; ?>
@break

@case(5)
<?php  $optionsPreviousKnoweledge= "Upper Intermediate B2"; ?>
@break

@case(6)
<?php  $optionsPreviousKnoweledge= "Advanced C1"; ?>
@break

@case(7)
<?php  $optionsPreviousKnoweledge= "Proficiency C2"; ?>
@break

@endswitch

@component('mail::table')
|        #        |         Select          |
| ------------------|:---------------------------------:|
| Previous Knowledg |  {{ $optionsPreviousKnoweledge }} |

@endcomponent

<hr/>





@if($request->locationsQuito == "Quito" || $request->locationsOtavalo =="Otavalo" )

#Accommodation

@component('mail::table')
|           Check In          |         Check Out           |
| ------------------------------------------|:-----------------------------------------:|
| {{ $request->dateAccommodationFrom }}   |  {{ $request->dateAccommodationTo }}    |

@endcomponent

  @switch($request->accommodation)
    @case(1)
      @switch($request->bathroomFamily)
        @case(1)
        <?php $bathroomPrivate= "Private"; ?>
        @break
        @case(2)
        <?php $bathroomPrivate= "Shared"; ?>
        @break
        @default
        <?php $bathroomPrivate= "He/She did not select the option!"; ?>
        @break
      @endswitch

      @if (!empty($request->howManyPeople))

        @switch($request->howManyPeople)
          @case(1)
          <?php $howManyPeoples= "Just Myself"; ?>
          @break

          @case(2)
          <?php $howManyPeoples= "Myself And Partner / Husband / Wife"; ?>
          @break

          @case(3)
          <?php $howManyPeoples= "Myself And Friend / Traveling Companion"; ?>
          @break

          @case(4)
          <?php $howManyPeoples= "Myself And Friend / Traveling Companion"; ?>
          @break

          @default
          <?php $howManyPeoples= "He/She did not select the option!"; ?>
          @break
        @endswitch
      @endif

      @if (!empty($request->typeRoom))

        @switch($request->typeRoom)
          @case(1)
          <?php $typeRomms= "Matrimonial"; ?>
          @break
        
          @case(2)
          <?php $typeRomms= "Single"; ?>
          @break
        
          @case(3)
          <?php $typeRomms= "Double"; ?>
          @break
        
          @default
          <?php $typeRomms= "Multiple!"; ?>
          @break
        @endswitch
      @endif


@component('mail::table')
|     Option      |   Host Family            |
| ----------------------|:------------------------------:|
| Accommodation     |  {{ $request->accommodation }} |
| Meals per day     |  {{ $request->mealDayFamily }} |
| Bathroom        |  {{ $bathroomPrivate }}      |
| How Many People   |  {{ $howManyPeoples }}       |
| Type Room       | {{ $typeRomms }}       |
@endcomponent

@break

    @case(2)
      @if (!empty($request->howManyPeople))

        @switch($request->howManyPeople)
          @case(1)
          <?php $howManyPeoples= "Just Myself"; ?>
          @break

          @case(2)
          <?php $howManyPeoples= "Myself And Partner / Husband / Wife"; ?>
          @break

          @case(3)
          <?php $howManyPeoples= "Myself And Friend / Traveling Companion"; ?>
          @break

          @case(4)
          <?php $howManyPeoples= "Myself And Friend / Traveling Companion"; ?>
          @break

          @default
          <?php $howManyPeoples= "He/She did not select the option!"; ?>
          @break
        @endswitch
      @endif

      @if (!empty($request->typeRoom))

        @switch($request->typeRoom)
          @case(1)
          <?php $typeRomms= "Matrimonial"; ?>
          @break
          @case(2)
          <?php $typeRomms= "Single"; ?>
          @break
          @case(3)
          <?php $typeRomms= "Double"; ?>
          @break
          @default
          <?php $typeRomms= "Multiple!"; ?>
          @break
        @endswitch

      @endif

@component('mail::table')
|     Option      | Student Residence with breakfast in Quito |
| ----------------------|:-----------------------------------------:|
| Accommodation     |  {{ $request->accommodation }}            |
| How Many People   |  {{ $howManyPeoples }}            |
| Type Room       | {{ $typeRomms }}            |
@endcomponent

@break

@case(3)

@component('mail::table')
|     Option          | I wish to organize my own accommodation   |
| ------------------------------|:-----------------------------------------:|
| Accommodation             |  {{ $request->accommodation }}            |
| Name of Hotel/Hostel      |  {{ $request->nameHotel }}          |
| Address of my accommodation:  | {{ $request->addressAccommodation  }} |
| Phone of my accommodation   | {{ $request->phoneAccommodation }}    |
@endcomponent

@break

@default
<p>He/She did not select the option!</p>
@break

@endswitch

<hr/>

@endif


#Personal Data
@component('mail::table')
|     Option    |       Billing Details                   |
| ------------------|:---------------------------------------------------:|
| Full Name:    |  {{ $request->title }}&nbsp;{{ $request->fname }}&nbsp;{{ $request->lname }} |
| Address:      | {{ $request->address  }}                |
| City:       | {{ $request->city }}                |
| Country:      |  {{ $request->country }}                    |
| Email:      | {{ $request->email  }}                      |

@endcomponent

<hr/>

#Airport Information

<?php $wishtomeet= "--"; ?>
@switch($request->airportQuito)
@case(1)
<?php  $wishtomeet= "Yes"; ?>
@break

@case(2)
<?php  $wishtomeet= "No"; ?>
@break

@endswitch

@component('mail::table')
| Do You Wish To Be Met At The Airport In Quito? (free of charge at any day of the week and at any time) |
| :-----------------------------------------------------------------------------------------------------:|
|                                             {{ $wishtomeet }}                                          |

@endcomponent

@component('mail::table')
|     Option    |   Airpor Information       |
| ------------------|:--------------------------------:|
| Date of Arrival:  |  {{ $request->dateArrival }}     |
| Time of Arrival:  | {{ $request->timeArrival  }}   |
| Airline Company:  | {{ $request->airlineCompany }} |
| Flight Number:  |  {{ $request->flightNumber }}    |

@endcomponent

<hr/>

#Price
@component('mail::table')
|     Option      |       Order Details      |
| ----------------------|:--------------------------------------:|
| Courses Cost:     |  {{ $request->courses_cost }}        |
| Accommodation Cost: | {{ $request->accommodation_cost  }}  |
| Registration Fee:   | {{ $request->registration_cost }}  |
| Grand Total:      |  {{ $request->grand_total }}       |

@endcomponent

<hr/>

#Payment Methods
@if (!empty($request->payment_method))

@switch($request->payment_method)
@case(1)
<?php $paymentMethod= "Credit Card"; ?>
@break
@case(2)
<?php $paymentMethod= "Bank Transfer"; ?>
@break
@case(3)
<?php $paymentMethod= "Cash on Arrival"; ?>
@break
@case(4)
<?php $paymentMethod= "Western Union"; ?>
@break
@default
<?php $paymentMethod= "No Payment"; ?>
@endswitch

@endif

@component('mail::table')
|       Option          |   Payment Methods       |
| ------------------------------|:-------------------------:|
| Payment Method        |  {{ $paymentMethod }}   |

@endcomponent

<hr/>

# Meanwhile we invite you to follow our Social Networks:

<p style="text-align: center;">
<a href="https://www.facebook.com/institutosuperiordeespanol1/">Facebook</a> | <a href="https://www.instagram.com/institutosuperiordeespanol/">Instagram</a> | <a href="https://www.tripadvisor.com/Attraction_Review-g294308-d10085877-Reviews-ISE_Instituto_Superior_de_Espanol-Quito_Pichincha_Province.html">TripAdvisor</a> | <a href="https://www.youtube.com/channel/UC1-Vo-8UEBxAnOTgSY_x9pQ">YouTube</a>
</p>


Thanks,<br>
{{ config('app.name') }}
@endcomponent
