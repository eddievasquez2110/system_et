import React, { useState } from 'react'
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout';
import { Head } from '@inertiajs/inertia-react';
import ReactApexChart  from 'react-apexcharts';

export default function DashDona(props) {

    const  [state, setState] = useState({
        series: [44, 55, 41, 17, 15],
            options: {
              chart: {
                type: 'donut',
              },
              responsive: [{
                breakpoint: 480,
                options: {
                  chart: {
                    width: 200
                  },
                  legend: {
                    position: 'bottom'
                  }
                }
              }]
            },
          });

    return (
        <div id="chart">
            <ReactApexChart 
            options={state.options} 
            series={state.series} 
            type="donut" 
            height={200}
            className='mt-10'
            />
        </div>
    );
}