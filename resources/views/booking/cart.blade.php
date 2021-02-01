<div class="card">
    <div class="card-header" id="headingEight">
        <h2 class="mb-0">
            <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
                {{ __('booking.cart') }}
            </button>
        </h2>
    </div>
    <div id="collapseEight" class="collapse" aria-labelledby="headingEight" data-parent="#accordionExample">
        <div class="card-body">
            
          <cart 
          v-bind:options="options"
          v-bind:students="students"
          v-on:total-ready="total=$event"
          v-bind:priceaccommodation="priceaccommodation"  ></cart>

        </div>
    </div>
</div>