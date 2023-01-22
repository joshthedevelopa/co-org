<x-layout title="SF Connect">
    <div class="section filter">
        <span class="heading">Search:</span>
        <div class="divider"></div>
        <div class="grid">
            <div class="form-input">
                <label>Keyword</label>
                <input type="text" name="keyword">
            </div>
            <div class="form-input">
                <label>Region</label>
                <select name="type">
                    <option value="">-- Select A Option --</option>
                </select>
            </div>
            <div class="form-input">
                <label>Type</label>
                <select name="region">
                    <option value="">-- Select A Option --</option>
                </select>
            </div>
            <div class="form-input">
                <input class="btn primary" type="submit" name="search" value="Search">
            </div>
        </div>
    </div>
    <div class="section">
        <div class="container">
            <x-card></x-card>
        </div>
    </div>
</x-layout>