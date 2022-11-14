import React from 'react';
import ApplicationLogo from '@/Components/ApplicationLogo';
import { Link } from '@inertiajs/inertia-react';
import InputLabel from '@/Components/InputLabel';

export default function Guest({ children }) {
    return (
        <div className="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100">
            
            <div className='w-full sm:max-w-md px-6 py-4 bg-green-900 overflow-hidden text-center flex rounded-t-lg shadow-xl'>
            <ApplicationLogo></ApplicationLogo><InputLabel className='text-white mt-8 font-bold'>SISTEMA DE ESPECIFICACIONES TÉCNICAS</InputLabel>
            </div>
            <div className="w-full sm:max-w-md px-6 py-4 bg-white shadow-xl overflow-hidden sm:rounded-b-lg">
                {children}
            </div>
        </div>
    );
}
