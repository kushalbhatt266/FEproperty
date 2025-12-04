<div class="row px-2 w-100">  
    <div class="row mdc-card between-xs middle-xs w-100 p-2 filter-row mdc-elevation--z1 text-muted"> 
        <button id="page-sidenav-toggle" class="mdc-icon-button material-icons d-md-none d-lg-none d-xl-none"> 
            more_vert 
        </button>  
        <div class="mdc-menu-surface--anchor"> 
            <!-- <button class="mdc-button mdc-ripple-surface text-muted mutable"> 
                <span class="mdc-button__ripple"></span>
                <span class="mdc-button__label"><span class="mutable">Sort by Default</span></span>
                <i class="material-icons mdc-button__icon m-0">arrow_drop_down</i>
            </button> 
            <div class="mdc-menu mdc-menu-surface">
                <ul class="mdc-list" role="menu" aria-hidden="true" aria-orientation="vertical" tabindex="-1">
                    <li class="mdc-list-item" role="menuitem">
                        <span class="mdc-list-item__text">Sort by Default</span>
                    </li>
                    <li class="mdc-list-item" role="menuitem">
                        <span class="mdc-list-item__text">Newest</span>
                    </li> 
                    <li class="mdc-list-item" role="menuitem">
                        <span class="mdc-list-item__text">Oldest</span>
                    </li> 
                    <li class="mdc-list-item" role="menuitem">
                        <span class="mdc-list-item__text">Popular</span>
                    </li> 
                    <li class="mdc-list-item" role="menuitem">
                        <span class="mdc-list-item__text">Price (Low to High)</span>
                    </li> 
                    <li class="mdc-list-item" role="menuitem">
                        <span class="mdc-list-item__text">Price (High to Low)</span>
                    </li>
                </ul>
            </div> --> 
        </div>
        <div class="row middle-xs d-none d-sm-flex d-md-flex d-lg-flex d-xl-flex">
            <!-- <div class="mdc-menu-surface--anchor"> 
                <button class="mdc-button mdc-ripple-surface text-muted"> 
                    <span class="mdc-button__ripple"></span>
                    <span class="mdc-button__label">Show<span class="mx-2 mutable">8</span></span>
                    <i class="material-icons mdc-button__icon m-0">arrow_drop_down</i>
                </button> 
                <div class="mdc-menu mdc-menu-surface">
                    <ul class="mdc-list" role="menu" aria-hidden="true" aria-orientation="vertical" tabindex="-1">
                        <li class="mdc-list-item" role="menuitem">
                            <span class="mdc-list-item__text">8</span>
                        </li>
                        <li class="mdc-list-item" role="menuitem">
                            <span class="mdc-list-item__text">12</span>
                        </li> 
                        <li class="mdc-list-item" role="menuitem">
                            <span class="mdc-list-item__text">16</span>
                        </li> 
                        <li class="mdc-list-item" role="menuitem">
                            <span class="mdc-list-item__text">24</span>
                        </li> 
                        <li class="mdc-list-item" role="menuitem">
                            <span class="mdc-list-item__text">36</span>
                        </li> 
                    </ul>
                </div> 
            </div> -->
            <a href="#saved_search_modal" rel="modal:open">Save Search</a> 
            <button class="mdc-icon-button material-icons view-type" data-view-type="list" data-col="1" data-full-width-page="false">view_list</button> 
            <button class="mdc-icon-button view-type" data-view-type="grid" data-col="2" data-full-width-page="false">
                <svg class="material-icons mat-icon-sm" viewBox="0 0 25 25">
                    <path d="M3,11H11V3H3M3,21H11V13H3M13,21H21V13H13M13,3V11H21V3"/>
                </svg>
            </button> 
            <button class="mdc-icon-button view-type material-icons d-none d-lg-flex d-xl-flex" data-view-type="grid" data-col="3" data-full-width-page="false">view_module</button> 
        </div>
    </div>  
</div> 
<div class="row start-xs middle-xs py-2 w-100"> 
    <div class="mdc-chip-set"> 
        <div class="mdc-chip bg-warn">
            <div class="mdc-chip__ripple"></div>
            <span>
                <span role="button" tabindex="0" class="mdc-chip__text uppercase">{{$total}} found</span>
            </span> 
        </div>
        <!-- <div class="mdc-chip">
            <div class="mdc-chip__ripple"></div>
            <span>
                <span role="button" tabindex="0" class="mdc-chip__text">House</span>
            </span>
            <span>
                <i class="material-icons mdc-chip__icon mdc-chip__icon--trailing" tabindex="-1" role="button">cancel</i>
            </span>
        </div> 
        <div class="mdc-chip">
            <div class="mdc-chip__ripple"></div>
            <span>
                <span role="button" tabindex="0" class="mdc-chip__text">For sale</span>
            </span>
            <span>
                <i class="material-icons mdc-chip__icon mdc-chip__icon--trailing" tabindex="-1" role="button">cancel</i>
            </span>
        </div> 
        <div class="mdc-chip">
            <div class="mdc-chip__ripple"></div>
            <span>
                <span role="button" tabindex="0" class="mdc-chip__text">Price > 150000</span>
            </span>
            <span>
                <i class="material-icons mdc-chip__icon mdc-chip__icon--trailing" tabindex="-1" role="button">cancel</i>
            </span>
        </div> 
        <div class="mdc-chip">
            <div class="mdc-chip__ripple"></div>
            <span>
                <span role="button" tabindex="0" class="mdc-chip__text">Price &lt; 450000</span>
            </span>
            <span>
                <i class="material-icons mdc-chip__icon mdc-chip__icon--trailing" tabindex="-1" role="button">cancel</i>
            </span>
        </div> -->
    </div> 
</div> 
 