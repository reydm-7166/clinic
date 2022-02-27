<form id="date" action="dash-date" method="post">
    Month <select class="center" name="month_from">
            <option value="1">January</option>
            <option value="2">February</option>
            <option value="3">March</option>
            <option value="4">April</option>
            <option value="5">May</option>
            <option value="6">June</option>
            <option value="7">July</option>
            <option value="8">August</option>
            <option value="9">September</option>
            <option value="10">October</option>
            <option value="11">November</option>
            <option value="12">December</option>
            </select>
    Day <input type="number" min="1" max="31" size="1" name="day_from">

    Month <select class="center" name="month_to">
            <option value="1">January</option>
            <option value="2">February</option>
            <option value="3">March</option>
            <option value="4">April</option>
            <option value="5">May</option>
            <option value="6">June</option>
            <option value="7">July</option>
            <option value="8">August</option>
            <option value="9">September</option>
            <option value="10">October</option>
            <option value="11">November</option>
            <option value="12" selected>December</option>
            </select>
    Day <input type="number" min="1" max="31" size="1" name="day_to"><br><br>
    <input class="btn btn-primary" type="submit" value="Submit" name="submit">
</form>