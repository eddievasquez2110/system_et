import React from 'react';
import ApplicationLogoLogin from '@/Components/ApplicationLogoLogin';
import InputLabel from '@/Components/InputLabel';

export default function Guest({ children,label}) {
    return (
        <div className="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gradient-to-r from-green-100 to-green-300">
            <div className='w-300 p-2'>
                <div className='sm:max-w-lg px-6 py-4 bg-green-900 overflow-hidden text-center flex rounded-t-lg shadow-xl'>
                <ApplicationLogoLogin/><InputLabel className='px-1 text-white mt-8 ml-10 font-bold'>{label}</InputLabel>
                </div>
                <div className="flex-full sm:max-w-lg px-7 py-4 bg-white shadow-xl overflow-hidden rounded-b-lg">
                    {children}
                </div>
            </div>
            
            
        </div>
    );
}
