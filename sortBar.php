<div id="sortBarWrap">
	<ul>
		<li>
			<div id="gotoId">
				<span>Id#</span>
				<input type="number" min="1" max="100">
				<button>GO</button>
			</div>
		</li>
		<li>
			<div id="sortBy">
				<span>Sort by</span>
				<div class="btn-group">
					<button data-toggle="dropdown" class="btn dropdown-toggle">
						<span id="sortListSpan" data-label-placement="Date (Latest - Earlier)">Date (Latest - Earlier)</span>
						<i class="fa fa-sort"></i>
					</button>
					<ul class="dropdown-menu pull-right">
						<li><input type="radio" id="sort0" name="sort"><label for="sort0"></label></li><!--do NOT delete-->
						<li><input type="radio" id="sort1" name="sort" checked><label for="sort1">Date (Latest - Earlier)</label></li>
						<li><input type="radio" id="sort2" name="sort"><label for="sort2">Date (Earlier - Latest)</label></li>
						<li><input type="radio" id="sort3" name="sort"><label for="sort3">Price (High - Low)</label></li>
						<li><input type="radio" id="sort4" name="sort"><label for="sort4">Price (Low - High)</label></li>
						<li><input type="radio" id="sort5" name="sort"><label for="sort5">Bedroom (Ascending)</label></li>
						<li><input type="radio" id="sort6" name="sort"><label for="sort6">Bedroom (Descending)</label></li>
						<li><input type="radio" id="sort7" name="sort"><label for="sort7">Suburb (A - Z)</label></li>
						<li><input type="radio" id="sort8" name="sort"><label for="sort8">Suburb (Z - A)</label></li>
					</ul>
				</div>
			</div>
		</li>
		<li>
			<div id="gridListView">
				<div id="gridListCover"></div>
				<object id="gridOrList" data="img/gridOrList.svg" type="image/svg+xml"></object>
			</div>
		</li>
		<li>
			<div id="arrowsWrap">
				<ul id="arrowCover1">
					<li>
					<li>
				</ul>
				<object class="sortBarArrows leftArrows" data="img/barArrow.svg" type="image/svg+xml"></object>
				<object class="sortBarArrows leftArrows arrowNoBar" data="img/barArrow.svg" type="image/svg+xml"></object>
				<div id="pageNo">
					<div class="btn-group">
						<button data-toggle="dropdown" class="btn dropdown-toggle" id="pageDropdown">
							<span>Page</span>
							<span id="pNoSpan" data-label-placement="1">1</span>
							<i class="fa fa-sort"></i>
						</button>
						<ul class="dropdown-menu pull-right">
							<li><input type="radio" id="page0" name="page"><label for="page0"></label></li><!--do NOT delete-->
							<li><input type="radio" id="page1" name="page" checked><label for="page1">1</label></li>
							<li><input type="radio" id="page2" name="page"><label for="page2">2</label></li>
							<li><input type="radio" id="page3" name="page"><label for="page3">3</label></li>
							<li><input type="radio" id="page4" name="page"><label for="page4">4</label></li>
							<li><input type="radio" id="page5" name="page"><label for="page5">5</label></li>
							<li><input type="radio" id="page6" name="page"><label for="page6">6</label></li>
							<li><input type="radio" id="page7" name="page"><label for="page7">7</label></li>
							<li><input type="radio" id="page8" name="page"><label for="page8">8</label></li>
						</ul>
					</div>
				</div>
				<ul id="arrowCover2">
					<li>
					<li>
				</ul>
				<object class="sortBarArrows rightArrows arrowNoBar" data="img/barArrow.svg" type="image/svg+xml"></object>
				<object class="sortBarArrows rightArrows" data="img/barArrow.svg" type="image/svg+xml"></object>
			</div>
		</li>
		<li>
			<div id="listPerPage">
				<span>Item / Page</span>
				<div id="listSlider"></div>
				<span class="lowerVal" id="noOfListLow"></span>
			</div>
		</li>



	</ul>
</div>
