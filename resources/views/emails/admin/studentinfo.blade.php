@component('mail::message')
# Regards,

A new user has requested information on the site {{ config('app.url') }}

@switch($request->sex)
	@case(1)
	<?php $sex= "Male"; ?>
	@break
	@case(2)
	<?php $sex= "Famela"; ?>
	@break
@endswitch


#Personal Data

@component('mail::table')
| Option				            |	Information     		                             |
|:--------------------------| ------------------------------------------------:|
| Full Name:				        | {{ $request->fname }}&nbsp;{{ $request->lname }} |
| Email:					          | {{ $request->email  }}	      			             |
| Birth Date:	    		      | {{ $request->bday }}			    				           |
| Gender:					          | {{ $sex }}  				                             |
| Country:					        | {{ $request->country }}  				                 |
| Telephone:				        | {{ $request->tel }}  					                   |
| Passport:					        | {{ $request->passport }}  				               |
| Emergency Contact Person: | {{ $request->emergencyName }}  			             |
| Telephone's Emergency:    | {{ $request->tel2 }}   					                 |

@endcomponent



## Information about your Travel Insurance Company


@component('mail::table')
| Option	    			  |	Information     		             |
|:--------------------| --------------------------------:|
| Insurance Company:	| {{ $request->insuranceCompany }} |
| Policy #:					  | {{ $request->policy }}				   |
| Phone # (24 hours):	| {{ $request->phone24 }}		    	 |
| Email:					    | {{ $request->email2 }}  	       |

@endcomponent


## Profession

@component('mail::table')
| Option     				    |	Information     		       |
|:----------------------| --------------------------:|
| Profession:		        | {{ $request->profession }} |
| Interest / Hobbies:		| {{ $request->hobbies }}    |

@endcomponent



## Important Information for your Host

@component('mail::table')
| Option    				      |	Information                                  |
|:------------------------| --------------------------------------------:|
| Do you smoke?		        | {{ $request->youSmoke ? 'Yes' : 'No' }}      |
| Are you vegetarian?		  | {{ $request->youVegetarian ? 'Yes' : 'No' }} |
| Do you have allergies?	| {{ $request->haveAllergies ? 'Yes' : 'No' }} |


@endcomponent

## Dietary restrictions or allergies

{{ $request->pleaseSpecify  }}


Thanks, {{ config('app.name') }}
@endcomponent
