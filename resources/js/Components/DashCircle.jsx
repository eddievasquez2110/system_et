import React, { useState } from 'react'
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout';
import { Head } from '@inertiajs/inertia-react';
import Chart from 'chart.js/auto';
import { Doughnut } from 'react-chartjs-2';

export const  data =  {
    labels: [
        'Rechazados',
        'Validado',
        'Pendiente'
      ],
      datasets: [{
        label: 'Graficos',
        data: [50/100,40/100 ,70/100],
        backgroundColor: [
          'rgb(255, 99, 132)',
          'RGB(74, 222, 128)',
          'rgb(255, 205, 86)'
        ],
        hoverOffset: 4
      }]   
};

export default function DashCircle(props) {

    return (
        <div id="chart" className='w-80'>
            <div className='w-full bg-green-700 text-center text-white rounded-t-lg p-2'>
            <h2>Solicitudes</h2>
            </div>
            <Doughnut 
            data={data} 
            type="Doughnut" 
            className='wrapper flex flex-wrap justify-center bg-white w-100 p-5 rounded-lg drop-shadow '
            />
        </div>
    );
}