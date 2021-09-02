<header class="refine">
    <div class="form">
        <div>
            <a href="#" class="button white">View Tasks</a>
            <a href="#" class="button white">Add New Team</a>
        </div>
        <label for="day" class="checkbox-btn bg-whitest">
            <input type="checkbox" id="day" />
            <span>Day</span>
        </label>
        <label for="week" class="checkbox-btn bg-whitest">
            <input type="checkbox" id="week" />
            <span>Week</span>
        </label>
        <label for="month" class="checkbox-btn bg-whitest">
            <input type="checkbox" id="month" />
            <span>Month</span>
        </label>
    </div>
    <div class="form">
        <div class="select-filter-input">
            <p>
                <label for="sort_by">Sort:</label>
                <span>N/A</span>
                <input type="hidden" name="sort_by" id="sort_by" value="Date">
                <button type="button">
                    <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="chevron-down" class="svg-inline--fa fa-chevron-down fa-w-14" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path fill="currentColor" d="M207.029 381.476L12.686 187.132c-9.373-9.373-9.373-24.569 0-33.941l22.667-22.667c9.357-9.357 24.522-9.375 33.901-.04L224 284.505l154.745-154.021c9.379-9.335 24.544-9.317 33.901.04l22.667 22.667c9.373 9.373 9.373 24.569 0 33.941L240.971 381.476c-9.373 9.372-24.569 9.372-33.942 0z"></path></svg>
                </button>
            </p>
            <ul>
                <li>
                    <button>Date</button>
                </li>
                <li>
                    <button>Title</button>
                </li>
                <li>
                    <button>Location</button>
                </li>
            </ul>
        </div>
        <div class="select-filter-input">
            <p>
                <label for="filter_by">Fiter:</label>
                <span>N/A</span>
                <input type="hidden" name="filter_by" id="filter_by" value="Urgent">
                <button type="button">
                    <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="chevron-down" class="svg-inline--fa fa-chevron-down fa-w-14" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path fill="currentColor" d="M207.029 381.476L12.686 187.132c-9.373-9.373-9.373-24.569 0-33.941l22.667-22.667c9.357-9.357 24.522-9.375 33.901-.04L224 284.505l154.745-154.021c9.379-9.335 24.544-9.317 33.901.04l22.667 22.667c9.373 9.373 9.373 24.569 0 33.941L240.971 381.476c-9.373 9.372-24.569 9.372-33.942 0z"></path></svg>
                </button>
            </p>
            <ul>
                <li>
                    <button>Urgent</button>
                </li>
                <li>
                    <button>Critical</button>
                </li>
                <li>
                    <button>Important</button>
                </li>
            </ul>
        </div>
        <div class="select-filter-input">
            <p>
                <label for="dates">Date:</label>
                <span>N/A</span>
                <input type="hidden" name="dates" id="dates" value="Mon 22 - Tue 23">
                <button type="button">
                    <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="chevron-down" class="svg-inline--fa fa-chevron-down fa-w-14" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path fill="currentColor" d="M207.029 381.476L12.686 187.132c-9.373-9.373-9.373-24.569 0-33.941l22.667-22.667c9.357-9.357 24.522-9.375 33.901-.04L224 284.505l154.745-154.021c9.379-9.335 24.544-9.317 33.901.04l22.667 22.667c9.373 9.373 9.373 24.569 0 33.941L240.971 381.476c-9.373 9.372-24.569 9.372-33.942 0z"></path></svg>
                </button>
            </p>
            <ul>
                <li>
                    <button>Mon 22 - Tue 23</button>
                </li>
                <li>
                    <button>Tue 15 - Sun 21</button>
                </li>
                <li>
                    <button>Sat 11 - Tue 15</button>
                </li>
            </ul>
        </div>
    </div>
 </header>