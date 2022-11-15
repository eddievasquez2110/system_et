import React, { useState } from 'react'
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout';
import { Head } from '@inertiajs/inertia-react';
import Chart from 'chart.js/auto';
import { Doughnut } from 'react-chartjs-2';

export const  data = {
    labels: [
        'Red',
        'Blue',
        'Yellow'
      ],
      datasets: [{
        label: 'My First Dataset',
        data: [300, 50, 100],
        backgroundColor: [
          'rgb(255, 99, 132)',
          'rgb(54, 162, 235)',
          'rgb(255, 205, 86)'
        ],
        hoverOffset: 4
      }]   
};

export default function DashCircle(props) {

    return (
        <div id="chart">
            <Doughnut 
            data={data} 
            type="Doughnut" 
            className='mt-10'
            />
        </div>
    );
}