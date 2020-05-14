@extends('index')

@section('title')
    Charts
@endsection

@section('extra-style')

@endsection

@section('content')
<div class="container-fluid">
    <h3 class="page-title">Rekapitulasi Nilai EPBM Guru</h3>
    <svg></svg>
    <script src="https://d3js.org/d3.v4.min.js"></script>
    <script>
        const margin = 60;
        const width = 1000 - 2 * margin;
        const height = 600 - 2 * margin;
        // var svgWidth = 500;
        // var svgHeight = 300;

        var svg = d3.select('svg')
            .attr("width", 1000)
            .attr("height", 600)
            // .attr("class", "bar-chart");

        const chart = svg.append('g')
            .attr('transform', `translate(${margin}, ${margin})`);

        const yScale = d3.scaleLinear()
            .range([height, 0])
            .domain([0, 10])

        const xScale = d3.scaleBand()
            .range([0, width])
            .domain(['N1', 'N2', 'N3', 'N4', 'N5'])
            .padding(0.2)

            var dataset = [1, 2, 10, 3, 1];

            var pertanyaans = [
                {
                    nilai: "N1",
                    jumlah: dataset[0]
                },
                {
                    nilai: "N2",
                    jumlah: dataset[1]
                },
                {
                    nilai: "N3",
                    jumlah: dataset[2]
                },
                {
                    nilai: "N4",
                    jumlah: dataset[3]
                },
                {
                    nilai: "N5",
                    jumlah: dataset[4]
                },
            ];

        chart.append('g')
            .call(d3.axisLeft(yScale));

        chart.append('g')
            .attr('transform', `translate(0, ${height})`)
            .call(d3.axisBottom(xScale));

        chart.selectAll()
            .data(pertanyaans)
            .enter()
            .append("rect")
            .attr("x", (s) => xScale(s.nilai))
            .attr("y", (s) => yScale(s.jumlah))
            .attr('height', (s) => height - yScale(s.jumlah))
            .attr('width', xScale.bandwidth())
            .style('fill', '#045c3c')

        svg.append('text')
            .attr('x', -(height / 2) - margin)
            .attr('y', margin / 2.4)
            .attr('transform', 'rotate(-90)')
            .attr('text-anchor', 'middle')
            .text('Jumlah')

        svg.append('text')
            .attr('x', width / 2 + margin)
            .attr('y', 40)
            .attr('text-anchor', 'middle')
            .text('Nilai yang didapatkan')
    </script>
</div>
@endsection


@section('extra-script')

@endsection
